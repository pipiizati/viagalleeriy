<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\album;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload()
    {
        $album = album::with('user')->where('user_id', auth()->user()->id)->get();
        return view('upload', compact('album'));
    }

    public function upload_foto(Request $request)
    {
        $filename = pathinfo($request->filefoto, PATHINFO_FILENAME);
        $extension = $request->filefoto->getClientOriginalExtension();
        $namafoto = 'foto' . time() . '.' . $extension;
        $request->filefoto->move('foto', $namafoto);

        $datasimpan = [
            'user_id' => auth()->user()->id,
            'album_id' => $request->nama_album,
            'judul_foto' => $request->judul_foto,
            'deskripsi_foto' => $request->deskripsi,
            'lokasi_file' => $namafoto

        ];
        foto::create($datasimpan);
        //Alert::success('Upluad berhasil','anda telah berhasil upload foto');
        return redirect('/exsplore');
    }
}
