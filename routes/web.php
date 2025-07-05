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

Route::get('tes/', function () {
     return view('admin/peserta/formlayanan');
 });

/* FRONT END */
// Home
Route::get('/', 'App\Http\Controllers\Home@index');
Route::get('home', 'App\Http\Controllers\Home@index');
Route::get('kontak', 'App\Http\Controllers\Home@kontak');
Route::get('pemesanan', 'App\Http\Controllers\Home@pemesanan');
Route::get('konfirmasi', 'App\Http\Controllers\Home@konfirmasi');
Route::get('pembayaran', 'App\Http\Controllers\Home@pembayaran');
Route::post('proses_pemesanan', 'App\Http\Controllers\Home@proses_pemesanan');
Route::get('berhasil/{par1}', 'App\Http\Controllers\Home@berhasil');
Route::get('cetak/{par1}', 'App\Http\Controllers\Home@cetak');
Route::get('courseprivate', 'App\Http\Controllers\Home@courseprivate');
Route::get('aksi', 'App\Http\Controllers\Aksi@index');
Route::get('aksi/status/{par1}', 'App\Http\Controllers\Aksi@status');
Route::get('daftar', 'App\Http\Controllers\Admin\User@tambah');
// Login
Route::get('login', 'App\Http\Controllers\Login@index');
Route::post('login/check', 'App\Http\Controllers\Login@check');
Route::get('login/lupa', 'App\Http\Controllers\Login@lupa');
Route::get('login/logout', 'App\Http\Controllers\Login@logout');
// Berita
Route::get('berita', 'App\Http\Controllers\Berita@index');
Route::get('berita/read/{par1}', 'App\Http\Controllers\Berita@read');
Route::get('berita/layanan/{par1}', 'App\Http\Controllers\Berita@layanan');
Route::get('berita/terjadi/{par1}', 'App\Http\Controllers\Berita@terjadi');
Route::get('berita/kategori/{par1}', 'App\Http\Controllers\Berita@kategori');
Route::get('berita/admin/murid/tambah', 'App\Http\Controllers\Admin\Murid@tambah');

/* END FRONT END */
/* BACK END */

// dasbor
Route::get('admin/dasbor', 'App\Http\Controllers\Admin\Dasbor@index');
Route::get('admin/dasbor/konfigurasi', 'App\Http\Controllers\Admin\Dasbor@konfigurasi');

// user
Route::get('admin/user', 'App\Http\Controllers\Admin\User@index');
Route::post('admin/user/tambah', 'App\Http\Controllers\Admin\User@tambah');
Route::get('admin/user/edit/{par1}', 'App\Http\Controllers\Admin\User@edit');
Route::post('admin/user/proses_edit', 'App\Http\Controllers\Admin\User@proses_edit');
Route::get('admin/user/delete/{par1}', 'App\Http\Controllers\Admin\User@delete');
Route::post('admin/user/proses', 'App\Http\Controllers\Admin\User@proses');
// konfigurasi
Route::get('admin/konfigurasi', 'App\Http\Controllers\Admin\Konfigurasi@index');
Route::get('admin/konfigurasi/logo', 'App\Http\Controllers\Admin\Konfigurasi@logo');
Route::get('admin/konfigurasi/profil', 'App\Http\Controllers\Admin\Konfigurasi@profil');
Route::get('admin/konfigurasi/icon', 'App\Http\Controllers\Admin\Konfigurasi@icon');
Route::get('admin/konfigurasi/email', 'App\Http\Controllers\Admin\Konfigurasi@email');
Route::get('admin/konfigurasi/gambar', 'App\Http\Controllers\Admin\Konfigurasi@gambar');
Route::get('admin/konfigurasi/pembayaran', 'App\Http\Controllers\Admin\Konfigurasi@pembayaran');
Route::post('admin/konfigurasi/proses', 'App\Http\Controllers\Admin\Konfigurasi@proses');
Route::post('admin/konfigurasi/proses_logo', 'App\Http\Controllers\Admin\Konfigurasi@proses_logo');
Route::post('admin/konfigurasi/proses_icon', 'App\Http\Controllers\Admin\Konfigurasi@proses_icon');
Route::post('admin/konfigurasi/proses_email', 'App\Http\Controllers\Admin\Konfigurasi@proses_email');
Route::post('admin/konfigurasi/proses_gambar', 'App\Http\Controllers\Admin\Konfigurasi@proses_gambar');
Route::post('admin/konfigurasi/proses_pembayaran', 'App\Http\Controllers\Admin\Konfigurasi@proses_pembayaran');
Route::post('admin/konfigurasi/proses_profil', 'App\Http\Controllers\Admin\Konfigurasi@proses_profil');
// berita
Route::get('admin/berita', 'App\Http\Controllers\Admin\Berita@index');
Route::get('admin/berita/cari', 'App\Http\Controllers\Admin\Berita@cari');
Route::get('admin/berita/status_berita/{par1}', 'App\Http\Controllers\Admin\Berita@status_berita');
Route::get('admin/berita/kategori/{par1}', 'App\Http\Controllers\Admin\Berita@kategori');
Route::get('admin/berita/jenis_berita/{par1}', 'App\Http\Controllers\Admin\Berita@jenis_berita');
Route::get('admin/berita/author/{par1}', 'App\Http\Controllers\Admin\Berita@author');
Route::get('admin/berita/tambah', 'App\Http\Controllers\Admin\Berita@tambah');
Route::get('admin/berita/edit/{par1}', 'App\Http\Controllers\Admin\Berita@edit');
Route::get('admin/berita/delete/{par1}/{par2}', 'App\Http\Controllers\Admin\Berita@delete');
Route::post('admin/berita/tambah_proses', 'App\Http\Controllers\Admin\Berita@tambah_proses');
Route::post('admin/berita/edit_proses', 'App\Http\Controllers\Admin\Berita@edit_proses');
Route::post('admin/berita/proses', 'App\Http\Controllers\Admin\Berita@proses');
Route::get('admin/berita/add', 'App\Http\Controllers\Admin\Berita@add');
// agenda
Route::get('admin/agenda', 'App\Http\Controllers\Admin\Agenda@index');
Route::get('admin/agenda/cari', 'App\Http\Controllers\Admin\Agenda@cari');
Route::get('admin/agenda/status_agenda/{par1}', 'App\Http\Controllers\Admin\Agenda@status_agenda');
Route::get('admin/agenda/kategori/{par1}', 'App\Http\Controllers\Admin\Agenda@kategori');
Route::get('admin/agenda/jenis_agenda/{par1}', 'App\Http\Controllers\Admin\Agenda@jenis_agenda');
Route::get('admin/agenda/author/{par1}', 'App\Http\Controllers\Admin\Agenda@author');
Route::get('admin/agenda/tambah', 'App\Http\Controllers\Admin\Agenda@tambah');
Route::get('admin/agenda/edit/{par1}', 'App\Http\Controllers\Admin\Agenda@edit');
Route::get('admin/agenda/delete/{par1}', 'App\Http\Controllers\Admin\Agenda@delete');
Route::post('admin/agenda/tambah_proses', 'App\Http\Controllers\Admin\Agenda@tambah_proses');
Route::post('admin/agenda/edit_proses', 'App\Http\Controllers\Admin\Agenda@edit_proses');
Route::post('admin/agenda/proses', 'App\Http\Controllers\Admin\Agenda@proses');
Route::get('admin/agenda/add', 'App\Http\Controllers\Admin\Agenda@add');
// rekening
Route::get('admin/rekening', 'App\Http\Controllers\Admin\Rekening@index');
Route::get('admin/rekening/edit/{par1}', 'App\Http\Controllers\Admin\Rekening@edit');
Route::post('admin/rekening/tambah', 'App\Http\Controllers\Admin\Rekening@tambah');
Route::post('admin/rekening/proses_edit', 'App\Http\Controllers\Admin\Rekening@proses_edit');
Route::get('admin/rekening/delete/{par1}', 'App\Http\Controllers\Admin\Rekening@delete');
Route::post('admin/rekening/proses', 'App\Http\Controllers\Admin\Rekening@proses');
// kategori
Route::get('admin/kategori', 'App\Http\Controllers\Admin\Kategori@index');
Route::post('admin/kategori/tambah', 'App\Http\Controllers\Admin\Kategori@tambah');
Route::post('admin/kategori/edit', 'App\Http\Controllers\Admin\Kategori@edit');
Route::get('admin/kategori/delete/{par1}', 'App\Http\Controllers\Admin\Kategori@delete');
// status
Route::get('admin/status_site', 'App\Http\Controllers\Admin\Status_site@index');
Route::post('admin/status_site/tambah', 'App\Http\Controllers\Admin\Status_site@tambah');
Route::post('admin/status_site/edit', 'App\Http\Controllers\Admin\Status_site@edit');
Route::get('admin/status_site/delete/{par1}', 'App\Http\Controllers\Admin\Status_site@delete');
// status
Route::get('admin/heading', 'App\Http\Controllers\Admin\Heading@index');
Route::post('admin/heading/tambah', 'App\Http\Controllers\Admin\Heading@tambah');
Route::post('admin/heading/edit', 'App\Http\Controllers\Admin\Heading@edit');
Route::get('admin/heading/delete/{par1}', 'App\Http\Controllers\Admin\Heading@delete');

// murid
Route::get('admin/murid', 'App\Http\Controllers\Admin\Murid@index');
Route::get('admin/murid/edit/{par1}', 'App\Http\Controllers\Admin\Murid@edit');
Route::get('admin/murid/tambah', 'App\Http\Controllers\Admin\Murid@tambah');
Route::post('admin/murid/proses_edit', 'App\Http\Controllers\Admin\Murid@proses_edit');
Route::get('admin/murid/delete/{par1}', 'App\Http\Controllers\Admin\Murid@delete');
Route::post('admin/murid/proses', 'App\Http\Controllers\Admin\Murid@proses');
Route::get('admin/murid/cari', 'App\Http\Controllers\Admin\Murid@cari');
Route::get('admin/murid/status/{par1}', 'App\Http\Controllers\Admin\Murid@status');
Route::get('admin/murid/kategori/{par1}', 'App\Http\Controllers\Admin\Murid@kategori');
Route::get('admin/murid/detail/{par1}', 'App\Http\Controllers\Admin\Murid@detail');
Route::post('admin/murid/tambah_proses', 'App\Http\Controllers\Admin\Murid@tambah_proses');


// kategori_kursus
Route::get('admin/kategori_kursus', 'App\Http\Controllers\Admin\Kategori_kursus@index');
Route::post('admin/kategori_kursus/tambah', 'App\Http\Controllers\Admin\Kategori_kursus@tambah');
Route::post('admin/kategori_kursus/edit', 'App\Http\Controllers\Admin\Kategori_kursus@edit');
Route::get('admin/kategori_kursus/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_kursus@delete');
// kategori_staff
Route::get('admin/kategori_staff', 'App\Http\Controllers\Admin\Kategori_staff@index');
Route::post('admin/kategori_staff/tambah', 'App\Http\Controllers\Admin\Kategori_staff@tambah');
Route::post('admin/kategori_staff/edit', 'App\Http\Controllers\Admin\Kategori_staff@edit');
Route::get('admin/kategori_staff/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_staff@delete');
// kategori_agenda
Route::get('admin/kategori_agenda', 'App\Http\Controllers\Admin\Kategori_agenda@index');
Route::post('admin/kategori_agenda/tambah', 'App\Http\Controllers\Admin\Kategori_agenda@tambah');
Route::post('admin/kategori_agenda/edit', 'App\Http\Controllers\Admin\Kategori_agenda@edit');
Route::get('admin/kategori_agenda/delete/{par1}', 'App\Http\Controllers\Admin\Kategori_agenda@delete');
// staff
Route::get('admin/staff', 'App\Http\Controllers\Admin\Staff@index');
Route::get('admin/staff/cari', 'App\Http\Controllers\Admin\Staff@cari');
Route::get('admin/staff/status_staff/{par1}', 'App\Http\Controllers\Admin\Staff@status_staff');
Route::get('admin/staff/kategori/{par1}', 'App\Http\Controllers\Admin\Staff@kategori');
Route::get('admin/staff/detail/{par1}', 'App\Http\Controllers\Admin\Staff@detail');
Route::get('admin/staff/tambah', 'App\Http\Controllers\Admin\Staff@tambah');
Route::get('admin/staff/edit/{par1}', 'App\Http\Controllers\Admin\Staff@edit');
Route::get('admin/staff/delete/{par1}', 'App\Http\Controllers\Admin\Staff@delete');
Route::post('admin/staff/tambah_proses', 'App\Http\Controllers\Admin\Staff@tambah_proses');
Route::post('admin/staff/edit_proses', 'App\Http\Controllers\Admin\Staff@edit_proses');
Route::post('admin/staff/proses', 'App\Http\Controllers\Admin\Staff@proses');



/* END BACK END*/
