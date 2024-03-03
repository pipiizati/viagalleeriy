<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use League\Flysystem\RootViolationException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});


Route::get('/dibuat', function () {
    return view('dibuat');
});



Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

// Route::get('/upload', function () {
//     return view('upload');
// });
Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload_foto', [UploadController::class, 'upload_foto'])->name('upload_foto');




Route::post('/proses_register', [GaleriController::class, 'proses_register']);
Route::post('/proses_login', [GaleriController::class, 'proses_login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/getDataExplore', [ExploreController::class, 'getData']);
    Route::post('/tambah_album', [GaleriController::class, 'tambah_album']);




    Route::get('/exsplore', function () {
        return view('exsplore');
    });
    Route::get('/detail_komen/{id}', function () {
        return view('detail_komen');
    });
    Route::get('/detail_komen/{id}/getdatadetail', [ExploreController::class, 'getdatadetail']);
    Route::get('/detail_komen/getComment/{id}', [ExploreController::class, 'ambildatakomentar']);
    Route::post('/detail_komen/kirimkomentar', [ExploreController::class, 'kirimkomentar']);



    Route::post('/likefoto', [ExploreController::class, 'likefoto']);
    Route::get('/ubah_password', function () {
        return view('ubah_password');
    });



    Route::get('/profile', [GaleriController::class, 'profile']);


    // Route::get('/edit_profile', function () {
    //     return view('edit_profile');
    // });
    Route::get('/edit_profile', [GaleriController::class, 'edit_profile']);
    Route::post('/updateprofile', [GaleriController::class, 'updateprofile']);

    Route::get('/buat_album', function () {
        return view('buat_album');
    });

    // Route::get('/album', function () {
    //     return view('album');
    // });
    Route::get('/album', [GaleriController::class, 'album']);
    Route::get('/album/{id}', [GaleriController::class, 'show'])->name('album.show');
    Route::get('/logout', [GaleriController::class, 'logout']);
});

Route::post('/ubah_password', [GaleriController::class, 'ubah_password']);
