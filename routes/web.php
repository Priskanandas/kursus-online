<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Login;
use App\Http\Controllers\Aksi;
use App\Http\Controllers\Berita;
use App\Http\Controllers\Admin\Dasbor;
use App\Http\Controllers\Admin\User;
use App\Http\Controllers\Admin\Staff;
use App\Http\Controllers\Admin\Murid;
use App\Http\Controllers\Admin\Kategori;
use App\Http\Controllers\Admin\Berita as AdminBerita;
use App\Http\Controllers\Admin\Agenda;
use App\Http\Controllers\Admin\Rekening;
use App\Http\Controllers\Admin\Kategori_kursus;
use App\Http\Controllers\Admin\Kategori_staff;
use App\Http\Controllers\Admin\Kategori_agenda;
use App\Http\Controllers\Admin\Konfigurasi;
use App\Http\Controllers\Admin\Status_site;
use App\Http\Controllers\Admin\Heading;

// Tes
Route::get('tes/', function () {
    return view('admin/peserta/formlayanan');
});

// ================= FRONT END =================
Route::get('/', [Home::class, 'index']);
Route::get('home', [Home::class, 'index']);
Route::get('kontak', [Home::class, 'kontak']);
Route::get('pemesanan', [Home::class, 'pemesanan']);
Route::get('konfirmasi', [Home::class, 'konfirmasi']);
Route::get('pembayaran', [Home::class, 'pembayaran']);
Route::post('proses_pemesanan', [Home::class, 'proses_pemesanan']);
Route::get('berhasil/{id}', [Home::class, 'berhasil']);
Route::get('cetak/{id}', [Home::class, 'cetak']);
Route::get('courseprivate', [Home::class, 'courseprivate']);

Route::get('daftar', [User::class, 'tambah']);

// Login
Route::get('login', [Login::class, 'index'])->name('login');
Route::post('login/check', [Login::class, 'check']);
Route::get('login/lupa', [Login::class, 'lupa']);
Route::get('login/logout', [Login::class, 'logout']);

// Berita
Route::get('berita', [Berita::class, 'index']);
Route::get('berita/read/{slug_berita}', [Berita::class, 'read']);
Route::get('berita/layanan/{slug_berita}', [Berita::class, 'layanan']);
Route::get('berita/terjadi/{slug_berita}', [Berita::class, 'terjadi']);
Route::get('berita/kategori/{slug_kategori}', [Berita::class, 'kategori']);
Route::get('berita/admin/murid/tambah', 'App\Http\Controllers\Admin\Murid@tambah');


// ================= USER =================
Route::middleware(['user'])->group(function () {
    Route::get('/agenda', [Agenda::class, 'index']);
    Route::get('/kursus', [Kategori_kursus::class, 'index']);
    Route::get('/profil', [User::class, 'edit']);
    Route::post('/profil/update', [User::class, 'proses_edit']);
});

// ================= ADMIN =================
Route::prefix('admin')->group(function () {
    Route::get('/dasbor', [Dasbor::class, 'index']);
    Route::get('/dasbor/konfigurasi', [Dasbor::class, 'konfigurasi']);

    // user
Route::get('user', 'App\Http\Controllers\Admin\User@index');
Route::post('user/tambah', 'App\Http\Controllers\Admin\User@tambah');
Route::get('user/edit/{id_user}', 'App\Http\Controllers\Admin\User@edit');
Route::post('user/proses_edit', 'App\Http\Controllers\Admin\User@proses_edit');
Route::get('user/delete/{id_user}', 'App\Http\Controllers\Admin\User@delete');
Route::post('user/proses', 'App\Http\Controllers\Admin\User@proses');

    // murid
    Route::get('murid', 'App\Http\Controllers\Admin\Murid@index');
    Route::get('murid/edit/{id_murid}', 'App\Http\Controllers\Admin\Murid@edit');
    Route::get('murid/tambah', 'App\Http\Controllers\Admin\Murid@tambah');
    Route::post('murid/proses_edit', 'App\Http\Controllers\Admin\Murid@proses_edit');
    Route::get('murid/delete/{id_murid}', 'App\Http\Controllers\Admin\Murid@delete');
    Route::post('murid/proses', 'App\Http\Controllers\Admin\Murid@proses');
    Route::get('murid/cari', 'App\Http\Controllers\Admin\Murid@cari');
    Route::get('murid/status/{status}', 'App\Http\Controllers\Admin\Murid@status');
    Route::get('murid/kategori/{id_kategori_kursus}', 'App\Http\Controllers\Admin\Murid@kategori');
    Route::get('murid/detail/{id_murid}', 'App\Http\Controllers\Admin\Murid@detail');
    Route::post('murid/tambah_proses', 'App\Http\Controllers\Admin\Murid@tambah_proses');


// berita
Route::get('berita', 'App\Http\Controllers\Admin\Berita@index');
Route::get('berita/cari', 'App\Http\Controllers\Admin\Berita@cari');
Route::get('berita/status_berita/{status_berita}', 'App\Http\Controllers\Admin\Berita@status_berita');
Route::get('berita/kategori/{id_kategori}', 'App\Http\Controllers\Admin\Berita@kategori');
Route::get('berita/jenis_berita/{jenis_berita}', 'App\Http\Controllers\Admin\Berita@jenis_berita');
Route::get('berita/author/{id_user}', 'App\Http\Controllers\Admin\Berita@author');
Route::get('berita/tambah', 'App\Http\Controllers\Admin\Berita@tambah');
Route::get('berita/edit/{id_berita}', 'App\Http\Controllers\Admin\Berita@edit');
Route::get('berita/delete/{id_berita}/{jenis_berita}', 'App\Http\Controllers\Admin\Berita@delete');
Route::post('berita/tambah_proses', 'App\Http\Controllers\Admin\Berita@tambah_proses');
Route::post('berita/edit_proses', 'App\Http\Controllers\Admin\Berita@edit_proses');
Route::post('berita/proses', 'App\Http\Controllers\Admin\Berita@proses');
Route::get('berita/add', 'App\Http\Controllers\Admin\Berita@add');

// agenda
    Route::get('agenda/cari', 'App\Http\Controllers\Admin\Agenda@cari');
    Route::get('agenda/jenis_agenda/{jenis_agenda}', 'App\Http\Controllers\Admin\Agenda@jenis_agenda');
    Route::get('agenda/author/{id_user}', 'App\Http\Controllers\Admin\Agenda@author');
    Route::post('agenda/proses', 'App\Http\Controllers\Admin\Agenda@proses');
    Route::get('agenda/add', 'App\Http\Controllers\Admin\Agenda@add');
    Route::get('agenda', 'App\Http\Controllers\Admin\Agenda@index');
    Route::get('agenda/tambah', 'App\Http\Controllers\Admin\Agenda@tambah');
    Route::post('agenda/tambah_proses', 'App\Http\Controllers\Admin\Agenda@tambah_proses');
    Route::get('agenda/edit/{id_agenda}', 'App\Http\Controllers\Admin\Agenda@edit');
    Route::post('agenda/edit_proses', 'App\Http\Controllers\Admin\Agenda@edit_proses');
    Route::get('agenda/delete/{id_agenda', 'App\Http\Controllers\Admin\Agenda@delete');
    Route::get('agenda/kategori/{id_kategori_agenda}', 'App\Http\Controllers\Admin\Agenda@kategori_agenda');
    Route::get('agenda/status_agenda/{status}', 'App\Http\Controllers\Admin\Agenda@status_agenda');
    Route::get('agenda/read/{slug_agenda}', 'App\Http\Controllers\Admin\Agenda@read');


    // konfigurasi
    Route::get('konfigurasi', 'App\Http\Controllers\Admin\Konfigurasi@index');
    Route::get('konfigurasi/logo', 'App\Http\Controllers\Admin\Konfigurasi@logo');
    Route::get('konfigurasi/profil', 'App\Http\Controllers\Admin\Konfigurasi@profil');
    Route::get('konfigurasi/icon', 'App\Http\Controllers\Admin\Konfigurasi@icon');
    Route::get('konfigurasi/email', 'App\Http\Controllers\Admin\Konfigurasi@email');
    Route::get('konfigurasi/gambar', 'App\Http\Controllers\Admin\Konfigurasi@gambar');
    Route::get('konfigurasi/pembayaran', 'App\Http\Controllers\Admin\Konfigurasi@pembayaran');
    Route::post('konfigurasi/proses', 'App\Http\Controllers\Admin\Konfigurasi@proses');
    Route::post('konfigurasi/proses_logo', 'App\Http\Controllers\Admin\Konfigurasi@proses_logo');
    Route::post('konfigurasi/proses_icon', 'App\Http\Controllers\Admin\Konfigurasi@proses_icon');
    Route::post('konfigurasi/proses_email', 'App\Http\Controllers\Admin\Konfigurasi@proses_email');
    Route::post('konfigurasi/proses_gambar', 'App\Http\Controllers\Admin\Konfigurasi@proses_gambar');
    Route::post('konfigurasi/proses_pembayaran', 'App\Http\Controllers\Admin\Konfigurasi@proses_pembayaran');
    Route::post('konfigurasi/proses_profil', 'App\Http\Controllers\Admin\Konfigurasi@proses_profil');

    
    // kategori_kursus
    Route::get('kategori_kursus', 'App\Http\Controllers\Admin\Kategori_kursus@index');
    Route::post('kategori_kursus/tambah', 'App\Http\Controllers\Admin\Kategori_kursus@tambah');
    Route::post('kategori_kursus/edit', 'App\Http\Controllers\Admin\Kategori_kursus@edit');
    Route::get('kategori_kursus/delete/{id_kategori_kursus}', 'App\Http\Controllers\Admin\Kategori_kursus@delete');
    // kategori_staff
    Route::get('kategori_staff', 'App\Http\Controllers\Admin\Kategori_staff@index');
    Route::post('kategori_staff/tambah', 'App\Http\Controllers\Admin\Kategori_staff@tambah');
    Route::post('kategori_staff/edit', 'App\Http\Controllers\Admin\Kategori_staff@edit');
    Route::get('kategori_staff/delete/{id_kategori_staff}', 'App\Http\Controllers\Admin\Kategori_staff@delete');
    // kategori_agenda
    Route::get('kategori_agenda', 'App\Http\Controllers\Admin\Kategori_agenda@index');
    Route::post('kategori_agenda/tambah', 'App\Http\Controllers\Admin\Kategori_agenda@tambah');
    Route::post('kategori_agenda/edit', 'App\Http\Controllers\Admin\Kategori_agenda@edit');
    Route::get('kategori_agenda/delete/{id_kategori_agenda}', 'App\Http\Controllers\Admin\Kategori_agenda@delete');
    // staff
    Route::get('staff', 'App\Http\Controllers\Admin\Staff@index');
    Route::get('staff/cari', 'App\Http\Controllers\Admin\Staff@cari');
    Route::get('staff/status_staff/{status_staff}', 'App\Http\Controllers\Admin\Staff@status_staff');
    Route::get('staff/kategori/{id_kategori_staff}', 'App\Http\Controllers\Admin\Staff@kategori');
    Route::get('staff/detail/{id_staff}', 'App\Http\Controllers\Admin\Staff@detail');
    Route::get('staff/tambah', 'App\Http\Controllers\Admin\Staff@tambah');
    Route::get('staff/edit/{id_staff}', 'App\Http\Controllers\Admin\Staff@edit');
    Route::get('staff/delete/{id_staff}', 'App\Http\Controllers\Admin\Staff@delete');
    Route::post('staff/tambah_proses', 'App\Http\Controllers\Admin\Staff@tambah_proses');
    Route::post('staff/edit_proses', 'App\Http\Controllers\Admin\Staff@edit_proses');
    Route::post('staff/proses', 'App\Http\Controllers\Admin\Staff@proses');

    // rekening
    Route::get('rekening', 'App\Http\Controllers\Admin\Rekening@index');
    Route::get('rekening/edit/{id_rekening}', 'App\Http\Controllers\Admin\Rekening@edit');
    Route::post('rekening/tambah', 'App\Http\Controllers\Admin\Rekening@tambah');
    Route::post('rekening/proses_edit', 'App\Http\Controllers\Admin\Rekening@proses_edit');
    Route::get('rekening/delete/{id_rekening}', 'App\Http\Controllers\Admin\Rekening@delete');
    Route::post('rekening/proses', 'App\Http\Controllers\Admin\Rekening@proses');
    // kategori
    Route::get('kategori', 'App\Http\Controllers\Admin\Kategori@index');
    Route::post('kategori/tambah', 'App\Http\Controllers\Admin\Kategori@tambah');
    Route::post('kategori/edit', 'App\Http\Controllers\Admin\Kategori@edit');
    Route::get('kategori/delete/{id_kategori}', 'App\Http\Controllers\Admin\Kategori@delete');
    // status
    Route::get('status_site', 'App\Http\Controllers\Admin\Status_site@index');
    Route::post('status_site/tambah', 'App\Http\Controllers\Admin\Status_site@tambah');
    Route::post('status_site/edit', 'App\Http\Controllers\Admin\Status_site@edit');
    Route::get('status_site/delete/{id_status_site}', 'App\Http\Controllers\Admin\Status_site@delete');
    // status
    Route::get('heading', 'App\Http\Controllers\Admin\Heading@index');
    Route::post('heading/tambah', 'App\Http\Controllers\Admin\Heading@tambah');
    Route::post('heading/edit', 'App\Http\Controllers\Admin\Heading@edit');
    Route::get('heading/delete/{id_heading}', 'App\Http\Controllers\Admin\Heading@delete');

});
