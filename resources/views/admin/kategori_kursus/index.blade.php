<p>
@include('admin/kategori_kursus/tambah')
</p>

<table class="table table-bordered" id="example1">
<thead>
<tr>
    <th width="5%">NO</th>
    <th width="25%">NAMA KATEGORI</th>
    <th width="25%">KETERANGAN</th>
    <th width="15%">SLUG</th>
    <th width="10%">NO URUT</th>
    <th></th>
</tr>
</thead>
<tbody>

<?php $i=1; foreach($kategori_kursus as $kategori_kursus) { ?>

<tr>
    <td class="text-center"><?php echo $i ?></td>
    <td><?php echo $kategori_kursus->nama_kategori_kursus ?></td>
    <td><?php echo $kategori_kursus->keterangan ?></td>
    <td><?php echo $kategori_kursus->slug_kategori_kursus ?></td>
    <td><?php echo $kategori_kursus->urutan ?></td>
    <td>
      <div class="btn-group">
      <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#Edit<?php echo $kategori_kursus->id_kategori_kursus ?>">
    <i class="fa fa-edit"></i> Edit
</button>
      <a href="{{ asset('admin/kategori_kursus/delete/'.$kategori_kursus->id_kategori_kursus) }}" class="btn btn-danger btn-sm delete-link"><i class="fas fa-trash-alt"></i> Hapus</a>
      </div>
      @include('admin/kategori_kursus/edit')
    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>