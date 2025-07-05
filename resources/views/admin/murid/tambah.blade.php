<p class="text-right">
  <a href="{{ asset('admin/murid') }}" 
  class="btn btn-success btn-sm"><i class="fa fa-backward"></i> Kembali</a>
</p>
<hr>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ asset('admin/murid/tambah_proses') }}" method="post" enctype="multipart/form-data" accept-charset="utf-8">
{{ csrf_field() }}

<div class="row form-group">
<label class="col-md-3 text-right">Status Tampil &amp; Nomor Urut tampil</label>

<div class="col-md-3">
<select name="status" class="form-control">
  <option value="Ya">Ya, tampilkan di website</option>
  <option value="Tidak">Tidak, jangan tampilkan di website</option>
</select>
<small>Tampilkan di website?</small>
</div>
<div class="col-md-3">
<input type="number" name="urutan" class="form-control" placeholder="No urut tampil" value="{{ old('urutan') }}">
<small class="text-success">Urutan</small>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Pilih Kursus</label>
<div class="col-md-9">
<select name="id_kategori_kursus" class="form-control select2">
  <?php foreach($kategori_kursus as $kategori_kursus) { ?>
  <option value="<?php echo $kategori_kursus->id_kategori_kursus ?>"><?php echo $kategori_kursus->nama_kategori_kursus ?></option>
  <?php } ?>

</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Nama Anda <span class="text-danger">*</span></label>
<div class="col-md-9">
<input type="text" name="nama" class="form-control" placeholder="Nama Anda" value="{{ old('nama') }}" required>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Pembayaran</label>
<div class="col-md-9">
<select name="pembayaran" class="form-control">
<option value="BCA" >
          BCA (4212-5482-04  a.n PRISKANANDA)
        </option>
                <option value="BNI SYARIAH" >
          BNI SYARIAH (0611-9927-06  a.n PT NUR KHOFIFAH)
        </option>
                <option value="BNI" >
          BNI (0105-3010-01 a.n YANUAR PRIYANTO)
        </option>
                <option value="BANK MANDIRI" >
          BANK MANDIRI (157-00-0180776-8 a.n MUHAMMAD DEWA ERLANG)
        </option>
</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Status Pembayaran</label>
<div class="col-md-9">
<select name="status" class="form-control">
  <option value="Belum Bayar">Belum Bayar</option>
  <option value="Lunas">Lunas</option>
</select>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Alamat</label>
<div class="col-md-9">
<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Data Kontak</label>
<div class="col-md-5">
<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
<small class="text-success">Alamat Email</small>
</div>
<div class="col-md-4">
<input type="text" name="telepon" class="form-control" placeholder="Telepon/HP" value="{{ old('telepon') }}">
<small class="text-success">Telepon/HP</small>
</div>
</div>



<div class="row form-group">
<label class="col-md-3 text-right">Upload gambar/Foto</label>
<div class="col-md-9">
<input type="file" name="gambar" class="form-control" required="required" placeholder="Upload gambar">
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Deskripsi Lengkap</label>
<div class="col-md-9">
<textarea name="isi" class="form-control" id="kontenku" placeholder="Isi murid">{{ old('isi') }}</textarea>
</div>
</div>

<div class="row form-group">
<label class="col-md-3 text-right">Keywords pencarian di Google</label>
<div class="col-md-6">
<textarea name="keywords" id="keywords" class="form-control" placeholder="Keywords pencarian di Google">{{ old('keywords') }}</textarea>
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