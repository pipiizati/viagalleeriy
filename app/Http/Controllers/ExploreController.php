<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\komentar;
use App\Models\like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExploreController extends Controller
{
    public function getData(Request $request)
    {
        $explore = foto::with(['like', 'user'])->orderBy('id', 'DESC')->withCount(['like', 'komentar'])->paginate(4);
        return response()->json([
            'data'  => $explore,
            'statuscode'    => 200,
            'idUser'    => auth()->user()->id
        ]);
    }

    public function likefoto(Request $request)
    {
        try {
            $request->validate([
                'fotoid' => 'required'
            ]);

            $existingLike = like::where('foto_id', $request->fotoid)->where('user_id', auth()->user()->id)->first();
            if (!$existingLike) {
                $dataSimpan = [
                    'foto_id'       => $request->fotoid,
                    'user_id'       => auth()->user()->id
                ];
                like::create($dataSimpan);
            } else {
                like::where('foto_id', $request->fotoid)->where('user_id', auth()->user()->id)->delete();
            }

            return response()->json('Data Berhasil Di Simpan', 200);
        } catch (\Throwable $th) {
            return response()->json('Something went wrong', 500);
        }
    }



    public function getdatadetail(Request $request, $id)
    {
        $dataDetailFoto     =  foto::with('user')->where('id', $id)->first();
        // $dataJumlahPengikut = DB::table('follows')->selectRaw('count(id_follow) as jmlfolow')->where('id_follow', $dataDetailFoto->user->id)->first();
        // $dataFollow = Follow::where('id_follow', $dataDetailFoto->user->id)->where('id_user', auth()->user()->id)->first();
        return response()->json([
            'dataDetailFoto' => $dataDetailFoto,
            // 'dataJumlahFollow'  => $dataJumlahPengikut,
            'dataUser'  => auth()->user()->id,
            // 'dataFollow'    => $dataFollow
        ]);
    }



    public function ambildatakomentar(Request $request, $id)
    {
        $ambilkomentar  = komentar::with('user')->where('foto_id', $id)->get();
        return response()->json([
            'data'  => $ambilkomentar
        ], 200);
    }

    public function kirimkomentar(Request $request)
    {
        try {
            $request->validate([
                'fotoid'    => 'required',
                'isi_komentar'  => 'required'
            ]);
            $dataStoreKomentar = [
                'user_id'   => auth()->user()->id,
                'foto_id'   => $request->fotoid,
                'isi_komentar'  => $request->isi_komentar
            ];
            komentar::create($dataStoreKomentar);
            return response()->json([
                'data'      => 'data berhasil disimpan'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json('data gagal disimpan', 500);
        }
    }
}
