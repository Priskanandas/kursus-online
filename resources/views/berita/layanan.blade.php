<?php 
$bg   = DB::table('heading')->where('halaman','Layanan')->orderBy('id_heading','DESC')->first();
 ?>
<!--Inner Header Start-->
<section class="wf100 p80 inner-header" style="background-image: url('{{ asset('assets/upload/image/'.$bg->gambar) }}'); background-position: bottom center;">
   <div class="container">
      <h1>{{ $title }}</h1>
   </div>
</section>
<!--Inner Header End--> 
<!--About Start-->
<section class="wf100 about">
<!--About Txt Video Start-->
<div class="about-video-section wf100">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="about-text text-aws">               
               <?php echo $berita->isi ?>
            </div>
         </div>
         <div class="col-lg-6">
            <a href="#"><img src="{{ asset('assets/upload/image/'.$berita->gambar) }}" alt="{{ $title }}" class="img img-fluid img-thumbnail"></a>
         </div>
         
         
      </div>
   </div>
</div>
</section>
<!--About Txt Video End--> 
        <!--daftar kursus-->
        <div class="row">

<div class="col-md-12 text-center">
 <hr>
  <h4>Mau Coba Kelas Gratis?</h4>
<p>Daftarkan diri anda untuk mendapatkan kelas gratis.</p>

<p>Atau Hubungi kami di: </p>
<p>
<a href="{{ asset('berita/admin/murid/tambah') }}" class="btn btn-info btn-block"><i class="fa fa-edit"></i> Formulir Pendaftaran</a>
</p>
<p>
<a href="https://wa.me/6281326699771?text=Halo%20*Course%20Private*.%20Saya%20tertarik%20untuk%20*Kursus%20Programming%20(Web%20dan%20Mobile)*%20di%20Course%20Private.%20Apakah%20bisa%20*Course%20Private*%20bisa%20membantu%20kami?" class="btn btn-primary btn-block" target="_blank"><i class="fab fa-whatsapp"></i> Tanya <strong><em>Kursus (Nanda)</em></strong> (+6285715100485)</a>
<div class="clearfix"></div>
</p>
<p>
<a href="https://wa.me/6289603688700?text=Halo%20*Course%20Private*.%20Saya%20tertarik%20untuk%20*Kursus%20Programming*%20di%20Course%20Private.%20Apakah%20bisa%20*Course%20Private*%20bisa%20membantu%20kami?" class="btn btn-primary btn-block" target="_blank"><i class="fab fa-whatsapp"></i> Tanya <strong><em>Kursus (Fifah)</em></strong> (+6285716275299)</a>
<div class="clearfix"></div>
</p>
 
</div>
</div>
</div>




 <!--Service Area Start-->
 <section class="donation-join wf100 p80">
   <div class="container text-center">
      <div class="row">
         <?php foreach($layanan as $layanan) { ?>
            <div class="col-md-4 col-sm-6">
               <br><a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">
               <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid"></a>
               <div class="volbox">
                  <h6>{{ $layanan->judul_berita }}</h6>
                  <p>{{ $layanan->keywords }}</p>
                  <a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">Lihat detail</a> 
               </div>
            </div>
                <!--box  end--> 
         <?php } ?>
      </div>
   </div>
</div>
<br><br>
</section>
<div class="clearfix"><br><br></div>


