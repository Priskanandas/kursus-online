<!-- Tentang Kami Start -->
<section class="wf100 about">
   <div class="about-murid-section wf100">
      <div class="container">
         <div class="row">
            <div class="col-lg-7">
               <div class="about-text">
                  <h5>TENTANG KAMI</h5>
                  <h2>{{ $site_config->nama_singkat }}</h2>
                  {!! $site_config->tentang !!}
                  <a href="{{ asset('kontak') }}" class="btn btn-info btn-lg mt-3">Kontak Kami</a>
               </div>
            </div>
            <div class="col-lg-5">
               <img src="{{ asset('assets/upload/image/'.$site_config->gambar) }}" alt="{{ $site_config->nama_singkat }}" class="img img-fluid img-thumbnail">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Tentang Kami End -->

<!-- Layanan Kami Start -->
<section class="donation-join wf100">
   <div class="container text-center">
      <h2 class="mb-5">Layanan Kami</h2>
      <div class="row">
         @foreach($layanan as $layanan)
         <div class="col-md-4 col-sm-12 mb-4">
            <img src="{{ asset('assets/upload/image/thumbs/'.$layanan->gambar) }}" alt="{{ $layanan->judul_berita }}" class="img img-thumbnail img-fluid">
            <div class="volbox mt-2">
               <h6>{{ $layanan->judul_berita }}</h6>
               <p>{{ $layanan->keywords }}</p>
               <a href="{{ asset('berita/layanan/'.$layanan->slug_berita) }}">Lihat detail</a>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<!-- Layanan Kami End -->

