<?php

use App\Models\kategori;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// latihan mengirim data ke view
Route::get('/latihankirimdata', function () {
    return view('welcome', ['title' => 'mahasiswa sistem informasi']);
});

// latihan mengambil data dari url dan dikirim ke view
Route::get('/latihankirimdata/{title}', function ($title) {
    return view('welcome', ['title' => $title]);
});

// latihan membuat route
Route::get('/studyclub', function () {
    // return view('welcome');
    echo "anda tidak memasukkan nama";
});

// latihan pertama route dengan parameter
Route::get('/studyclub/{nama}', function ($nama) {
    // return view('welcome');
    echo "selamat datang di studiclup " . $nama;
});

// latihan mengambil data dari url dengn ekspresi nama harus angka
Route::get('/studyclub/angka/{nama}', function ($nama) {
    // return view('welcome');
    echo "selamat datang di studiclup ke-" . $nama;
})->where('nama', '[0-9]+');

// latihan blade
Route::get('/latihanBlade', function () {
    return view('latihan', ['data1' => 0]);
});

// latihan blade
Route::get('/latihanBlade2', function () {
    return view('home');
});

// latihan templating
Route::get('/dasboard', function () {
    return view('index');
});

// use App\Http\Controllers\KategoriController;
// // latihan menggunakan model
// Route::get('/kategori/semua', [KategoriController::class, 'semua']);

use App\Http\Controllers\KategoriController2;

Route::resource('kategori',KategoriController2::class);

// Route::get('/kategori/tambah', function () {
//     kategori::create([
//         'nama_kategori' => "Pakaian Baru",
//         'deskripsi' => "Semua jenis pakaian baru"
//     ]);
// });

// Route::get('/kategori/update/{id}', function ($id) {
//     kategori::find($id)->update([
//         'nama_kategori' => "Pakaian Anak",
//         'deskripsi' => "Semua jenis pakaian anak"
//     ]);
// });

// Route::get('/kategori/hapus/{id}', function ($id) {
//     kategori::find($id)->delete();
// });
