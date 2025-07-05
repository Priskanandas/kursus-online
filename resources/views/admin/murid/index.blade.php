
<div class="row">

  <div class="col-md-6">
    <form action="{{ asset('admin/murid/cari') }}" method="get" accept-charset="utf-8">
    <br>
    <div class="input-group">                  
      <input type="text" name="keywords" class="form-control" placeholder="Ketik kata kunci pencarian murid...." value="<?php if(isset($_GET['keywords'])) { echo strip_tags($_GET['keywords']); } ?>" required>
      <span class="input-group-btn btn-flat">
        <button type="submit" class="btn btn-info"><i class="fa fa-search"></i> Cari</button>
        <a href="{{ asset('admin/murid/tambah') }}" class="btn btn-success">
        <i class="fa fa-plus"></i> Tambah Baru</a>
      </span>
    </div>
    </form>
  </div>
  <div class="col-md-6 text-left">
   
  </div>
</div>

<div class="clearfix"><hr></div>
<form action="{{ asset('admin/murid/proses') }}" method="post" accept-charset="utf-8">
  {{ csrf_field() }}
<div class="row">
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-btn" >
        <button class="btn btn-danger btn-sm" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
        </button> 
      </span>
      <select name="id_kategori_kursus" class="form-control form-control-sm">
        <?php foreach($kategori_kursus as $kategori_kursus) { ?>
          <option value="<?php echo $kategori_kursus->nama_kategori_kursus ?>"><?php echo $kategori_kursus->id_kategori_kursus ?></option>
        <?php } ?>
      </select>
      <span class="input-group-btn" >
        <button type="submit" class="btn btn-info btn-sm btn-flat" name="update">Update</button> 
      </span>
    </div>
  </div>

  <div class="col-md-8">
    <div class="btn-group">
      

         <?php if(isset($pagin)) { echo $pagin; } ?>

        </div>
      </div>
    </div>
    <div class="clearfix"><hr></div>
    <div class="table-responsive mailbox-messages">
      <table id="example1" class="display table table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
          <tr class="bg-info">
            <th width="5%" class="text-center">
              <div class="mailbox-controls">
                <!-- Check all button -->
               <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
            </div>
        </th>
    <th width="10%">Foto Profil</th>
    <th width="15%">Nama</th>
    <th width="10%">Kursus</th>
    <th width="10%">Pembayaran</th>
    <th width="10%">Status</th>
    <th width="10%">Nomer Urut</th>
    <th width="10%">ACTION</th>
</tr>
</thead>
<tbody>

    <?php $i=1; foreach($murid as $murid) { ?>

      <tr class="odd gradeX">
        <td class="text-center">
        <div class="icheck-primary">
                  <input type="checkbox" class="icheckbox_flat-blue " name="id_murid[]" value="<?php echo $murid->id_murid ?>" id="check<?php echo $i ?>">
                   <label for="check<?php echo $i ?>"></label>
        </div>
    </td>
      <td>
        <?php $site   = DB::table('konfigurasi')->first(); if($murid->gambar!="") { ?>
      <img src="{{ asset('assets/upload/murid/thumbs/'.$murid->gambar) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php }else{ ?>
      <img src="{{ asset('assets/upload/murid/thumbs/'.$site->icon) }}" class="img-thumbnail img-size-50 mr-2" >
      <?php } ?>
    </td>

    <td><?php echo $murid->nama ?>
    <small>
                  <br>Alamat: <?php echo $murid->alamat ?>
                  <br>Telepon: <?php echo $murid->telepon ?>
                  <br>Email: <?php echo $murid->email ?>
                  
                </small></td>
    <td><a href="{{ asset('berita/layanan/kursus-web-development/'.$murid->id_kategori_kursus) }}"><?php echo $murid->nama_kategori_kursus ?></a></td>
    <td><a href="{{ asset('admin/rekening/') }}">
        <?php echo $murid->pembayaran ?></a></td>
    <td><a href="{{ asset('admin/rekening/') }}">
        <?php echo $murid->status ?></a></td>
    <td><?php echo $murid->urutan ?></td>
    <td>
        <div class="btn-group">
        <a href="{{ asset('admin/murid/detail/'.$murid->id_murid) }}" 
                    class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Detail</a>
                  <a href="{{ asset('admin/murid/edit/'.$murid->id_murid) }}" 
                    class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/murid/delete/'.$murid->id_murid) }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
                  </div>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</form>
<div class="clearfix"><hr></div>
      <div class="pull-right"><?php if(isset($pagin)) { echo $pagin; } ?></div>
