<div class="container-fluid mt-3">
  <div class="row">
    <div class="col-md-12">

      <div class="card shadow">
        <div class="card-header bg-primary text-white">
          <h4 class="mb-0"><i class="fa fa-calendar-alt"></i> {{ $agenda->judul_agenda }}</h4>
        </div>

        <div class="card-body">
          @if($agenda->gambar)
            <div class="text-center mb-3">
              <img src="{{ asset('assets/upload/image/'.$agenda->gambar) }}" class="img-fluid rounded shadow-sm" style="max-height: 400px;">
            </div>
          @endif

          <div class="row mb-4">
            <div class="col-md-6">
              <p><i class="fa fa-tags"></i> <strong>Kategori:</strong> {{ $agenda->nama_kategori_agenda }}</p>
              <p><i class="fa fa-layer-group"></i> <strong>Jenis Agenda:</strong> {{ $agenda->jenis_agenda }}</p>
              <p><i class="fa fa-map-marker-alt"></i> <strong>Tempat:</strong> {{ $agenda->tempat }}</p>
            </div>
            <div class="col-md-6">
              <p><i class="fa fa-calendar-plus"></i> <strong>Mulai:</strong> {{ tanggal('tanggal_id', $agenda->tanggal_mulai) }} - {{ $agenda->jam_mulai }}</p>
              <p><i class="fa fa-calendar-times"></i> <strong>Selesai:</strong> {{ tanggal('tanggal_id', $agenda->tanggal_selesai) }} - {{ $agenda->jam_selesai }}</p>
              <p><i class="fa fa-user"></i> <strong>Author:</strong> {{ $agenda->nama }}</p>
            </div>
          </div>

          <div class="mb-3">
            <h5><i class="fa fa-info-circle"></i> Deskripsi Kegiatan</h5>
            <hr>
            <div class="text-justify">
              {!! $agenda->isi !!}
            </div>
          </div>

          <div class="mt-4">
            <small class="text-muted">
              <i class="fa fa-clock"></i> Diposting: {{ tanggal('tanggal_id', $agenda->tanggal_post) }} - {{ date('H:i:s', strtotime($agenda->tanggal_post)) }} <br>
              <i class="fa fa-globe"></i> Dipublikasikan: {{ tanggal('tanggal_id', $agenda->tanggal_publish) }} - {{ date('H:i:s', strtotime($agenda->tanggal_publish)) }}
            </small>
          </div>
        </div>

        <div class="card-footer text-right">
          <a href="{{ url('admin/agenda') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Kembali</a>
          <a href="{{ url('admin/agenda/edit/'.$agenda->id_agenda) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
        </div>
      </div>

    </div>
  </div>
</div>
