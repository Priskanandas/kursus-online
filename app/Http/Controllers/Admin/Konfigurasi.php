<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use App\Models\Konfigurasi_model;
use App\Http\Controllers\Admin\Konfigurasi;


class Konfigurasi extends Controller
{
    // Cek hanya admin yang boleh akses
    private function onlyAdmin()
    {
        if(Session()->get('username')=="") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        if(Session()->get('akses_level') !== 'Admin') {
            return redirect('admin/dasbor')->with(['warning' => 'Anda tidak memiliki akses']);
        }
        return null;
    }

    public function index()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $mykonfigurasi = new Konfigurasi_model();
        $site = $mykonfigurasi->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Data Konfigurasi',
            'site' => $site,
            'content' => 'admin/konfigurasi/index'
        ]);
    }

    public function logo()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Update Logo',
            'site' => $site,
            'content' => 'admin/konfigurasi/logo'
        ]);
    }

    public function profil()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Profil '.$site->namaweb,
            'site' => $site,
            'content' => 'admin/konfigurasi/profil'
        ]);
    }

    public function gambar()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Update Gambar Banner',
            'site' => $site,
            'content' => 'admin/konfigurasi/gambar'
        ]);
    }

    public function icon()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Update Icon',
            'site' => $site,
            'content' => 'admin/konfigurasi/icon'
        ]);
    }

    public function email()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Update Setting Email',
            'site' => $site,
            'content' => 'admin/konfigurasi/email'
        ]);
    }

    public function pembayaran()
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $site = (new Konfigurasi_model())->listing();
        return view('admin/layout/wrapper', [
            'title' => 'Update Panduan Pembayaran',
            'site' => $site,
            'content' => 'admin/konfigurasi/pembayaran'
        ]);
    }

    public function proses(Request $request)
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $request->validate(['namaweb' => 'required']);
        DB::table('konfigurasi')->where('id_konfigurasi',$request->id_konfigurasi)->update(array_merge(
            $request->except('_token'),
            ['id_user' => Session()->get('id_user')]
        ));
        return redirect('admin/konfigurasi')->with(['sukses' => 'Data telah diupdate']);
    }

    public function proses_email(Request $request)
    {
        if($redir = $this->onlyAdmin()) return $redir;
        $request->validate([
            'protocol' => 'required',
            'smtp_host' => 'required',
            'smtp_port' => 'required',
            'smtp_timeout' => 'required',
            'smtp_user' => 'required',
            'smtp_pass' => 'required'
        ]);
        DB::table('konfigurasi')->where('id_konfigurasi',$request->id_konfigurasi)->update(array_merge(
            $request->only([
                'protocol','smtp_host','smtp_port','smtp_timeout','smtp_user','smtp_pass'
            ]),
            ['id_user' => Session()->get('id_user')]
        ));
        return redirect('admin/konfigurasi/email')->with(['sukses' => 'Data setting email telah diupdate']);
    }

    // Metode lain seperti proses_logo, proses_profil, proses_icon, proses_gambar, proses_pembayaran
    // tetap sama, hanya tambahkan baris if($redir = $this->onlyAdmin()) return $redir;
    // di awal setiap fungsi
}
