<p class="text-right">
	<a href="{{ asset('admin/murid') }}" class="btn btn-success btn-sm">
		<i class="fa fa-backward"></i> Kembali
	</a>
</p>
<hr>
<?php
// Validasi error

// Error upload
if(isset($error)) {
	echo '<div class="alert alert-warning">';
	echo $error;
	echo '</div>';
}

// Form open
?>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/murid/proses_edit') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}
<input type="hidden" name="id_murid" value="{{ $murid->id_murid }}">
<div class="row form-group">
<label class="col-md-3 text-right">Status Tampil &amp; Nomor Urut tampil</label>

<div class="col-md-3">
<select name="status" class="form-control">
  <option value="Ya">Ya, tampilkan di website</option>
  <option value="Tidak" <?php if($murid->status=="Tidak") { echo 'selected'; } ?>>Tidak, jangan tampilkan di website</option>
</select>
<small>Tampilkan di website?</small>
</div>
<div class="col-md-3">
<input type="number" name="urutan" class="form-control" placeholder="No urut tampil" value="{{ $murid->urutan }}">
<small class="text-success">Urutan</small>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Kategori Kursus </label>
<div class="col-md-9">
<select name="id_kategori_kursus" class="form-control select2">
  <?php foreach($kategori_kursus as $kategori_kursus) { ?>
  <option value="<?php echo $kategori_kursus->id_kategori_kursus ?>"  <?php if($murid->id_kategori_kursus==$kategori_kursus->id_kategori_kursus) { echo 'selected'; } ?>><?php echo $kategori_kursus->nama_kategori_kursus ?></option>

  <?php } ?>

</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Nama Anda <span class="text-danger">*</span></label>
<div class="col-md-9">
<input type="text" name="nama" class="form-control" placeholder="Nama Anda" value="{{ $murid->nama }}" required>
</div>
</div>




<div class="row form-group">
<label class="col-md-3 text-right">Pembayaran</label>
<div class="col-md-9">
<select name="pembayaran" class="form-control">

  <option value="BCA" <?php if($murid->pembayaran=="BCA") { echo 'selected'; } ?>> BCA (4212-5482-04  a.n PRISKANANDA)</option>
  <option value="BNI SYARIAH" <?php if($murid->pembayaran=="BNI SYARIAH") { echo 'selected'; } ?>> BNI SYARIAH (0611-9927-06  a.n PT NUR KHOFIFAH) </option>
  <option value="BNI" <?php if($murid->pembayaran=="BNI") { echo 'selected'; } ?>>  BNI (0105-3010-01 a.n YANUAR PRIYANTO) </option>
  <option value="BANK MANDIRI" <?php if($murid->pembayaran=="BANK MANDIRI") { echo 'selected'; } ?>>  BANK MANDIRI (157-00-0180776-8 a.n MUHAMMAD DEWA ERLANG)</option>
</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Status Pembayaran</label>
<div class="col-md-9">
<select name="status" class="form-control">
  <option value="Belum Bayar"<?php if($murid->status=="Belum Bayar") { echo 'selected'; } ?>>Belum Bayar</option>
  <option value="Lunas"<?php if($murid->status=="Lunas") { echo 'selected'; } ?>>Lunas</option>
</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Alamat</label>
<div class="col-md-9">
<input type="text" name="Alamat" class="form-control" placeholder="Alamat Anda" value="{{ $murid->alamat }}">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Data Kontak</label>
<div class="col-md-5">
<input type="text" name="email" class="form-control" placeholder="Email" value="{{ $murid->email }}">
<small class="text-success">Alamat Email</small>
</div>
<div class="col-md-4">
<input type="text" name="telepon" class="form-control" placeholder="Telepon/HP" value="{{ $murid->telepon }}">
<small class="text-success">Telepon/HP</small>
</div>
</div>



<div class="row form-group">
<label class="col-md-3 text-right">Upload gambar/Foto</label>
<div class="col-md-9">
<input type="file" name="gambar" class="form-control" placeholder="Upload gambar">
<small>Gambar saat ini:
<br><?php if($murid->gambar!="") { ?>
<img src="{{ asset('assets/upload/murid/thumbs/'.$murid->gambar) }}" class="img img-thumbnail" width="80">
<?php } ?>
</small>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Deskripsi Lengkap</label>
<div class="col-md-9">
<textarea name="isi" class="form-control" id="kontenku" placeholder="Isi murid">{{ $murid->isi }}</textarea>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Keywords pencarian di Google</label>
<div class="col-md-6">
<textarea name="keywords" id="keywords" class="form-control" placeholder="Keywords pencarian di Google">{{ $murid->keywords }}</textarea>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right"></label>
<div class="col-md-9">
<div class="form-group">
<input type="submit" name="submit" class="btn btn-success " value="Simpan Data">
<input type="reset" name="reset" class="btn btn-info " value="Reset">
</div>
</div>
</div>
</form>