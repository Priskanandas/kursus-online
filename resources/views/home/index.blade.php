<!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <?php foreach($slider as $slider) { ?>
            <div class="item">
               <div class="slider-caption h3slider">
                  <div class="container">
                     <?php if($slider->status_text=="Ya") { ?>
                     <strong>{{ strip_tags($slider->isi) }}</strong>
                     <h1>{{ $slider->judul_galeri }}</h1>
                     <a href="{{ asset('courseprivate') }}">Baca detail</a>
                     <?php } ?>
                  </div>
               </div>
               <img src="{{ asset('assets/upload/image/'.$slider->gambar) }}" alt=""> 
            </div>
            <?php } ?>
         </section>
         <!--Slider End--> 
         <!--Service Area Start-->
         <section class="donation-join wf100">
            <div class="container text-center">
               <div class="row">
                  
                  <?php foreach($layanan as $layanan) { ?>
                     <div class="col-md-4 col-sm-12">
                        <br>
                        <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid">
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
         </section>
         <!--Service Area End--> 
         <section class="wf100 about">
            <!--About Txt Video Start-->
            <div class="about-murid-section wf100">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7">
                        <div class="about-text">
                           <h5>TENTANG KAMI</h5>
                           <h2>{{ $site_config->nama_singkat }}</h2>
                           <?php echo $site_config->tentang ?>

                           <a href="{{ asset('kontak') }}" class="btn btn-info btn-lg">Kontak Kami</a> 
                        </div>
                     </div>
                     <div class="col-lg-5">
                        <a href="#"><img src="{{ asset('assets/upload/image/'.$site_config->gambar) }}" alt="{{ $site_config->nama_singkat }}" class="img img-fluid img-thumbnail">
                     </div>
                  </div>
               </div>
            </div>
            <!--About Txt Video End--> 
            <!--About Section Start-->

         
         <!--Blog Start-->
<section class="h2-news wf100 p80 blog">
   <div class="blog-grid">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="section-title-2">
                  <h5>Baca update kami</h5>
                  <h2>Berita & Updates</h2>
               </div>
            </div>
            <div class="col-md-6"> <a href="{{ asset('berita') }}" class="view-more">Lihat berita lainnya</a> </div>
            <div class="col-md-12">
               <hr>
            </div>
         </div>
         <div class="row" style="background-color: white; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
            <?php foreach($berita as $berita) { ?>
            <!--Blog Small Post Start-->
            <div class="col-md-4 col-sm-6" >
               <div class="blog-post">
                  <div class="blog-thumb"> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-link"></i></a> <img src="{{ asset('assets/upload/image/thumbs/'.$berita->gambar) }}" alt="><?php  echo $berita->judul_berita ?>"> </div>
                  <div class="post-txt">
                     <h5><a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><?php  echo $berita->judul_berita ?></a></h5>
                     <ul class="post-meta">
                        <li> <a href="{{ asset('berita/read/'.$berita->slug_berita) }}"><i class="fas fa-calendar-alt"></i> {{ tanggal('tanggal_id',$berita->tanggal_post)}}</a> </li>
                        <li> <a href="{{ asset('berita/kategori/'.$berita->slug_berita) }}"><i class="fas fa-sitemap"></i> {{ $berita->nama_kategori }}</a> </li>
                     </ul>
                     <p><?php echo \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100, $end='...') ?></p>
                     <a href="{{ asset('berita/read/'.$berita->slug_berita) }}" class="read-post">Baca detail</a>
                  </div>
               </div>
            </div>
            <!--Blog Small Post End--> 
            <?php } ?>
         </div>
         
      </div>
   </div>
</section>
<!--Blog End--> 
