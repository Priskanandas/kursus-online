<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Image;
use App\Models\Murid_model;

class Murid extends Controller
{
    // Main page
    public function index()
    {
        Paginator::useBootstrap();
        $murid = DB::table('murid')
                    ->select('*')
                    ->orderBy('id_murid','DESC')
                    ->paginate(10);
       	$site 	= DB::table('konfigurasi')->first();

		$data = array(  'title'		=> 'Video and Webinar '.$site->namaweb,
						'deskripsi'	=> 'Video and Webinar '.$site->namaweb,
						'keywords'	=> 'Video and Webinar '.$site->namaweb,
						'videos'	=> $murid,
						'site'		=> $site,
                        'content'	=> 'murid/index'
                    );
        return view('layout/wrapper',$data);
    }

     // detail
    public function detail($id_murid)
    {
        $murid = DB::table('murid')
                    ->join('kategori_video', 'kategori_video.id_kategori_video', '=', 'murid.id_kategori_video','LEFT')
                    ->select('murid.*', 'kategori_video.nama_kategori_video')
                    ->where('murid.id_murid',$id_murid)
                    ->orderBy('murid.id_murid','DESC')
                    ->first();
        $hits       = $murid->hits+1;
        DB::table('murid')->where('id_murid',$murid->id_murid)->update([
            'hits'      => $hits
        ]);
        $data = array(  'title'		=> $murid->nama,
						'deskripsi'	=> $murid->nama,
						'keywords'	=> $murid->nama,
						'videos'	=> $murid,
                        'content'	=> 'murid/detail'
                    );
        return view('layout/wrapper',$data);
    }

}
