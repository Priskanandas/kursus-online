<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class murid_model extends Model
{

	protected $table 		= "murid";
	protected $primaryKey 	= 'id_murid';

    // listing
    public function semua()
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->orderBy('murid.id_murid','DESC')
            ->get();
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where('murid.nama_murid', 'LIKE', "%{$keywords}%") 
            ->orWhere('murid.isi', 'LIKE', "%{$keywords}%") 
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }
    // listing
    public function listing()
    {
    	$query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where('status_murid','Publish')
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }



    // kategori
    public function kategori_kursus($id_kategori_kursus)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'         => 'Publish',
                            'murid.id_kategori_kursus'    => $id_kategori_kursus))
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }

    // Kategori
    public function kategori()
    {
         $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'         => 'Publish'))
            ->groupBy('murid.id_kategori_kursus')
            ->orderBy('kategori_kursus.urutan','ASC')
            ->get();
        return $query;
    }

    // kategori
    public function all_kategori_kursus($id_kategori_kursus)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.id_kategori_kursus'    => $id_kategori_kursus))
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function status_murid($status_murid)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'         => $status_murid))
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function detail_kategori_kursus($id_kategori_kursus)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'         => 'Publish',
                            'murid.id_kategori_kursus'    => $id_kategori_kursus))
            ->orderBy('id_murid','DESC')
            ->first();
        return $query;
    }

    // kategori
    public function detail_slug_kategori_kursus($slug_kategori_kursus)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'                  => 'Publish',
                            'kategori_kursus.slug_kategori_kursus'  => $slug_kategori_kursus))
            ->orderBy('id_murid','DESC')
            ->first();
        return $query;
    }


    // kategori
    public function slug_kategori_kursus($slug_kategori_kursus)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where(array(  'murid.status_murid'                  => 'Publish',
                            'kategori_kursus.slug_kategori_kursus'  => $slug_kategori_kursus))
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }

    // detail
    public function read($slug_murid)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where('murid.slug_murid',$slug_murid)
            ->orderBy('id_murid','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_murid)
    {
        $query = DB::table('murid')
            ->join('kategori_kursus', 'kategori_kursus.id_kategori_kursus', '=', 'murid.id_kategori_kursus','LEFT')
            ->select('murid.*', 'kategori_kursus.slug_kategori_kursus', 'kategori_kursus.nama_kategori_kursus')
            ->where('murid.id_murid',$id_murid)
            ->orderBy('id_murid','DESC')
            ->first();
        return $query;
    }

    // Gambar
    public function gambar($id_murid)
    {
        $query = DB::table('gambar_murid')
            ->select('*')
            ->where('gambar_murid.id_murid',$id_murid)
            ->orderBy('id_murid','DESC')
            ->get();
        return $query;
    }
}
