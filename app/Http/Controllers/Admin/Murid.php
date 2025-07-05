<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use App\Models\Murid_model;

class Murid extends Controller
{
    // Index
    public function index()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymurid 		= new Murid_model();
		$murid			= $mymurid->semua();
		$kategori_kursus 	= DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();

        $data = array(  'title'     => 'Data Murid',
                        'murid'  => $murid,
                        'kategori_kursus'	=> $kategori_kursus,
                        'content'   => 'admin/murid/index'
                    );
        return view('admin/layout/wrapper',$data);
    }
      // Main page
      public function detail($id_murid)
      {
          if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
          $mymurid        = new murid_model();
          $murid          = $mymurid->detail($id_murid);
  
          $data = array(  'title'             => $murid->nama,
                          'murid'             => $murid,
                          'content'           => 'admin/murid/detail'
                      );
          return view('admin/layout/wrapper',$data);
      }
        // Cari
        public function cari(Request $request)
        {
            if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
            $mymurid           = new Murid_model();
            $keywords           = $request->keywords;
            $murid             = $mymurid->cari($keywords);
            $kategori_kursus   = DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();
    
            $data = array(  'title'             => 'Data Murid (Kursus)',
                            'murid'            => $murid,
                            'kategori_kursus'   => $kategori_kursus,
                            'content'           => 'admin/murid/index'
                        );
            return view('admin/layout/wrapper',$data);
        }

       // Proses
       public function proses(Request $request)
       {
           $site   = DB::table('konfigurasi')->first();
           // PROSES HAPUS MULTIPLE
           if(isset($_POST['hapus'])) {
               $id_muridnya       = $request->id_murid;
               for($i=0; $i < sizeof($id_muridnya);$i++) {
                   DB::table('murid')->where('id_murid',$id_muridnya[$i])->delete();
               }
               return redirect('admin/murid')->with(['sukses' => 'Data telah dihapus']);
           // PROSES SETTING DRAFT
           }elseif(isset($_POST['update'])) {
           $id_muridnya      = $request->id_murid;
           for($i=0; $i < sizeof($id_muridnya);$i++) {
               DB::table('murid')->where('id_murid',$id_muridnya[$i])->update([
                       'id_user'               => Session()->get('id_user'),
                       'id_kategori_kursus'    => $request->id_kategori_kursus
                   ]);
           }
           return redirect('admin/murid')->with(['sukses' => 'Data kategori telah diubah']);
           }
       }
       
       //Status
     public function status($status)
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
         $mymurid          = new Murid_model();
         $murid            = $mymurid->status($status);
         $kategori_kursus   = DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();
 
         $data = array(  'title'             => 'Data Murid',
                         'murid'            => $murid,
                         'kategori_kursus'   => $kategori_kursus,
                         'content'           => 'admin/murid/index'
                     );
         return view('admin/layout/wrapper',$data);
     }

      //Kategori
    public function kategori($id_kategori_kursus)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymurid          = new Murid_model();
        $murid            = $mymurid->all_kategori_kursus($id_kategori_kursus);
        $kategori_kursus   = DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Data murid(Board and Team)',
                        'murid'            => $murid,
                        'kategori_kursus'   => $kategori_kursus,
                        'content'           => 'admin/murid/index'
                    );
        return view('admin/layout/wrapper',$data);
    } 
     
        // Tambah
        public function tambah()
        {
            if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
            $kategori_kursus    = DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();
    
            $data = array(  'title'             => 'Daftar Murid ',
                            'kategori_kursus'   => $kategori_kursus,
                            'content'           => 'admin/murid/tambah'
                        );
            return view('admin/layout/wrapper',$data);
        }
    
        // Edit
    public function edit($id_murid)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymurid          = new Murid_model();
        $murid            = $mymurid->detail($id_murid);
        $kategori_kursus   = DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();

        $data = array(  'title'     => 'Edit Data Murid',
                        'murid'     => $murid,
                        'kategori_kursus'   => $kategori_kursus,
                        'content'   => 'admin/murid/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama'     => 'required|unique:murid',
                            'gambar'    => 'required|file|image|mimes:jpeg,png,jpg|max:8024'
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/murid/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/murid/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            // UPLOAD START  
            $slug_murid = Str::slug($request->nama.'-'.$request->id_kategori_kursus, '-');
     
            DB::table('murid')->insert([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_kursus'     => $request->id_kategori_kursus,
                'nama'            => $request->nama,
                'slug_murid'            => $slug_murid,
                'kursus'               => $request->kursus,
                'alamat'            => $request->alamat,
                'pembayaran'             => $request->pembayaran,
                'email'                 => $request->email,
                'telepon'               => $request->telepon,
                'isi'                   => $request->isi,
                'gambar'                => $input['nama_file'],
                'status'          => $request->status,
                'keywords'              => $request->keywords,
                'urutan'                => $request->urutan
            ]);
            return redirect('admin/murid')->with(['sukses' => 'Data telah ditambah']);
        }else{
            // UPLOAD START       
            DB::table('murid')->insert([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_kursus'     => $request->id_kategori_kursus,
                'nama'            => $request->nama,
                'slug_murid'            => $slug_murid,
                'kursus'               => $request->kursus,
                'alamat'            => $request->alamat,
                'pembayaran'             => $request->pembayaran,
                'email'                 => $request->email,
                'telepon'               => $request->telepon,
                'isi'                   => $request->isi,
                'status'          => $request->status,
                'keywords'              => $request->keywords,
                'urutan'                => $request->urutan
                ]);
            return redirect('admin/murid')->with(['sukses' => 'Data telah ditambah']);
        }
    }

    // edit
    public function proses_edit(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                           'nama'      => 'required',
                            'gambar'    => 'required|file|image|mimes:jpeg,png,jpg|max:8024'
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/murid/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/murid/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_murid = Str::slug($request->nama.'-'.$request->nama_kategori_kursus, '-');

            DB::table('murid')->where('id_murid',$request->id_murid)->update([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_kursus'     => $request->id_kategori_kursus,
                'nama'            => $request->nama,
                'slug_murid'            => $slug_murid,
                'kursus'               => $request->kursus,
                'alamat'            => $request->alamat,
                'pembayaran'             => $request->pembayaran,
                'email'                 => $request->email,
                'telepon'               => $request->telepon,
                'isi'                   => $request->isi,
               'gambar'                => $input['nama_file'],
                'status'          => $request->status,
                'keywords'              => $request->keywords,
                'urutan'                => $request->urutan

            ]);
        }else{
            $slug_murid = Str::slug($request->nama.'-'.$request->nama_kategori_kursus, '-');

            DB::table('murid')->where('id_murid',$request->id_murid)->update([
                'id_user'               => Session()->get('id_user'),
                'id_kategori_kursus'     => $request->id_kategori_kursus,
                'nama'            => $request->nama,
                'slug_murid'            => $slug_murid,
                'kursus'               => $request->kursus,
                'alamat'            => $request->alamat,
                'pembayaran'             => $request->pembayaran,
                'email'                 => $request->email,
                'telepon'               => $request->telepon,
                'isi'                   => $request->isi,
                'status'          => $request->status,
                'keywords'              => $request->keywords,
                'urutan'                => $request->urutan

            ]);
            return redirect('admin/murid')->with(['sukses' => 'Data telah diupdate']);
        }
    }
     

    // Delete
    public function delete($id_murid)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('murid')->where('id_murid',$id_murid)->delete();
        return redirect('admin/murid')->with(['sukses' => 'Data telah dihapus']);
    }
}
