<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

    
        //ROUTE UNTUK SETIAP PAGE DAN INTERFACE //
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/reports/report', [App\Http\Controllers\ReportController::class, 'tengokReport']);
        Route::get('/maklumbalas/{report_id}', [App\Http\Controllers\MaklumbalasController::class, 'maklumbalasView']);
        //Route::get('/reports/report', function () {return view('/reports/report');});
        Route::get('/kategori_1/kategori_aduan', function () {return view('/kategori_1/kategori_aduan');});
        Route::get('/kategori_3/pengguna', function () {return view('/kategori_3/pengguna');});
        Route::get('/kategori_2/lokasi', function () {return view('/kategori_2/lokasi');});
        Route::get('/kemaskini/Kemaskini', function () {return view('/kemaskini/Kemaskini');});
        Route::get('/carian/mengikut_kategori', function () {return view('/carian/mengikut_kategori');});
        Route::get('/carian/mengikut_tarikh', function () {return view('/carian/mengikut_tarikh');});
        Route::get('/laporan/keseluruhan', function () {return view('/laporan/keseluruhan');});
        Route::get('/laporan/tarikh&daerah', function () {return view('/laporan/tarikh&daerah');});
        Route::get('/laporan/belum_diberi_maklumbalas', function () {return view('/laporan/belum_diberi_maklumbalas');});
        Route::get('/laporan/kes_selesai', function () {return view('/laporan/kes_selesai');});
        Route::get('/maklumbalas', function () {return view('/maklumbalas');});

        // ROUTE UNTUK INSERT DATA KE DATABASE//
        Route::post('/reports/report', [App\Http\Controllers\ReportController::class, 'addReport']);
        Route::post('/kategori_1/kategori_aduan', [App\Http\Controllers\AduanController::class, 'addAduan']);
        Route::post('/kategori_2/lokasi', [App\Http\Controllers\LokasiController::class, 'addLokasi']);
        Route::post('/kategori_3/pengguna', [App\Http\Controllers\UserController::class, 'addKakitangan']);
        Route::post('/maklumbalas/{report_id}', [App\Http\Controllers\MaklumbalasController::class, 'addMaklumbalas']);

        //ROUTE UNTUK VIEW DATA DARI DATABASE
        Route::get('/kemaskini/Kemaskini', [App\Http\Controllers\ReportController::class, 'viewReport']);
        Route::get('/carian/mengikut_kategori', [App\Http\Controllers\ReportController::class, 'showReport']);
        Route::get('/carian/mengikut_tarikh', [App\Http\Controllers\ReportController::class, 'lookReport']);
        Route::get('/kategori_1/kategori_aduan', [App\Http\Controllers\AduanController::class, 'viewAduan']);
        Route::get('/kategori_2/lokasi', [App\Http\Controllers\LokasiController::class, 'viewLokasi']);
        Route::get('/kategori_3/pengguna', [App\Http\Controllers\UserController::class, 'viewKakitangan']);
        Route::get('/laporan/keseluruhan', [App\Http\Controllers\ReportController::class, 'keseluruhanReport']);
        Route::post('/laporan/belum_diberi_maklumbalas', [App\Http\Controllers\ReportController::class, 'seeReport']);
        Route::get('/laporan/tarikh&daerah',[App\Http\Controllers\ReportController::class, 'lihatReport']);
        Route::get('/laporan/kes_selesai', [App\Http\Controllers\ReportController::class, 'seenReport']);


        //ROUTE UNTUK DELETE DATA DARI DATABASE
        Route::get('/kategori_1/delete/{aduan_id}', [App\Http\Controllers\AduanController::class, 'deleteAduan']);
        Route::get('/kategori_2/delete/{lokasi_id}', [App\Http\Controllers\LokasiController::class, 'deleteLokasi']);
        Route::get('/kemaskini/delete/{report_id}', [App\Http\Controllers\ReportController::class, 'deleteReport']);
        Route::get('/kategori_3/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteKakitangan']);

        //ROUTE UNTUK EDIT DATA DARI DATABASE
        Route::get('/kemaskini/Kemaskini/edit/{report_id}', [App\Http\Controllers\ReportController::class, 'editReport']);
        Route::post('/kemaskini/Kemaskini/edit/{report_id}', [App\Http\Controllers\ReportController::class, 'updateReport']);
        Route::get('/kategori_1/kategori_aduan/edit{aduan_id}', [App\Http\Controllers\AduanController::class, 'editAduan']);
        Route::post('/kategori_1/kategori_aduan/edit{aduan_id}', [App\Http\Controllers\AduanController::class, 'updateAduan']);
        Route::get('/kategori_2/lokasi/edit/{lokasi_id}', [App\Http\Controllers\LokasiController::class, 'editLokasi']);
        Route::post('/kategori_2/lokasi/edit/{lokasi_id}', [App\Http\Controllers\LokasiController::class, 'updateLokasi']);
        Route::post('/kategori_2/lokasi/edit/{lokasi_id}', [App\Http\Controllers\LokasiController::class, 'updateLokasi']);

        
