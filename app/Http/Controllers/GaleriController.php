<?php

namespace App\Http\Controllers;

use App\Models\foto;
use App\Models\User;
use App\Models\album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GaleriController extends Controller
{
    public function proses_register(Request $request)
    {
        $message = [
            'user.required'     => 'Username wajib diisi',
            'username unique'   => 'Username sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min'      => 'Password minimal 8 karakter',
            'email.required'    => 'Email wajib diisi',
            'email.unique'      => 'Email wajib diisi',
        ];

        //Validasi
        $request->validate([
            'username' => 'required|unique :users,username',
            'password'  => 'required|min:8',
            'email'     => 'required|unique:users,email'
        ], $message);



        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];
        User::create($data);
        return redirect('/login');
    }


    //proses_login
    public function proses_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect('/exsplore');
            echo "<script>alert('berhasil login'); window.location.href='/index';</script>";
        } else {
            echo "<script>alert('gagal login'); window.location.href='login';</script>";
        }
    }


    public function tambah_album(Request $request)
    {
        $data = [
            'nama_album'    => $request->nama_album,
            'deskripsi'     => $request->deskripsi,
            'user_id'   => auth()->user()->id
        ];
        album::create($data);
        return redirect('/upload');
    }


    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/login');
    }


    public function album()
    {
        $tampilAlbum = album::with('foto')->where('user_id', auth()->user()->id)->get();
        return view('album', compact('tampilAlbum'));
    }


    public function show($id)
    {
        $album = album::with('foto')->findOrFail($id);
        return view('isi_album', compact('album'));
    }



    public function profile()
    {
        $profile = User::where('user_id', auth()->user()->id);
        $unggahan = foto::with('album')->orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->get();

        return view('/profile', compact('unggahan', 'profile'));
    }
    public function edit_profile(Request $request)
    {
        $data = [
            'dataprofile'   => User::where('id', auth()->user()->id)->first()
        ];
        return view('edit_profile', $data);
    }

    // public function editprofile(Request $request)
    // {
    //     $dataUpdate = [
    //         'nama_lengkap'        => $request->nama_lengkap,
    //         'username'            => $request->username,
    //         'alamat'              => $request->alamat,
    //     ];
    //     //Proses Update Data
    //     user::where('id', auth()->user()->id)->update($dataUpdate);
    //     return redirect('/profile', $dataUpdate);
    // }
    public function updateprofile(Request $request)
    {
        $dataToUpdate = [];

        // Check if a file is present in the request
        if ($request->hasFile('picture')) {
            // Logika penyimpanan foto sesuai kebutuhan Anda
            $filename = pathinfo($request->picture, PATHINFO_FILENAME);

            $extension = $request->picture->getClientOriginalExtension();
            $namafoto = 'foto_profile' . time() . '.' . $extension;
            $request->picture->move('foto_profile', $namafoto);

            // Update the 'profile' field only if a file is uploaded
            $dataToUpdate['picture'] = $namafoto;
        }

        // Update data lainnya
        $dataToUpdate += [
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
        ];
        //proses update
        User::where('id', auth()->user()->id)->update($dataToUpdate);
        return redirect('/profile');
    }
    //ubah_password

    public function ubah_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password lama tidak sesuai']);
        }

        $update_password = [
            'password'  => bcrypt($request->password),
        ];
        //     //proses simpan
        User::where('id', auth()->user()->id)->update($update_password);
        return redirect('/profile')->with('success', 'Password berhasil diubah ');
    }
}
