<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Kategori_kursus extends Controller
{
    // Index
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
		$kategori_kursus 	= DB::table('kategori_kursus')->orderBy('urutan','ASC')->get();

		$data = array(  'title'             => 'Kategori Kursus',
						'kategori_kursus'	=> $kategori_kursus,
                        'content'           => 'admin/kategori_kursus/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori_kursus' => 'required|unique:kategori_kursus',
					        'urutan' 		       => 'required',
					        ]);
    	$slug_kategori_kursus = Str::slug($request->nama_kategori_kursus, '-');
        DB::table('kategori_kursus')->insert([
            'nama_kategori_kursus'   => $request->nama_kategori_kursus,
            'slug_kategori_kursus'	=> $slug_kategori_kursus,
            'keterangan'            => $request->keterangan,
            'urutan'   		        => $request->urutan
        ]);
        return redirect('admin/kategori_kursus')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit(Request $request)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	request()->validate([
					        'nama_kategori_kursus' => 'required',
					        'urutan'               => 'required',
					        ]);
    	$slug_kategori_kursus = Str::slug($request->nama_kategori_kursus, '-');
        DB::table('kategori_kursus')->where('id_kategori_kursus',$request->id_kategori_kursus)->update([
            'nama_kategori_kursus'   => $request->nama_kategori_kursus,
            'slug_kategori_kursus'	=> $slug_kategori_kursus,
            'keterangan'            => $request->keterangan,
            'urutan'                => $request->urutan
        ]);
        return redirect('admin/kategori_kursus')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id_kategori_kursus)
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	DB::table('kategori_kursus')->where('id_kategori_kursus',$id_kategori_kursus)->delete();
    	return redirect('admin/kategori_kursus')->with(['sukses' => 'Data telah dihapus']);
    }
}
