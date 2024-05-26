@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Data Pendaki</h1>
  </div>


  <div class="row">
    <div class="col-md-12">
        <label for="">
            <form action="/pendaki/cari" method="GET">
            <input type="text" name="cari" placeholder="Nama / Status" class="form-control form-control-sm" id="cari">
            <button style="margin:3px;" class="btn btn-sm btn-primary" type="submit">
                <i class="fas fa-search"></i>
                    Cari
            </button>
            </form>
        </label>
		
        <a href="{{ route('pendaki.create') }}" class="btn med btn-success float-right">
            <i class="fas fa-plus"></i>
            Tambah Data Pendaki
        </a>
    </div>
  </div>
  <br>

  <table style="text-align:center;" class="table table-default table-bordered dataTable table-hover" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th width="2%">No.</th>
            <th width="5%">Nama Ketua</th>
            <th width="5%">Jenis Kelamin</th>
            <th width="5%">Jenis Identitas</th>
            <th width="5%">No. Identitas</th>
            <th width="5%">Foto Identitas</th>
            <th width="5%">Alamat</th>
            <th width="5%">No. HP</th>
            <th width="5%">Email</th>
            <th width="5%">Nama Anggota</th>
            <th width="5%">Tanggal Berangkat</th>
            <th width="5%">Tanggal Kembali</th>
            <th width="5%">Status</th>
            <th width="20%" style="text-align: center;vertical-align: middle;">Aksi</th>
         </tr>
         @foreach($pendaki as $key => $pen)
        <tr>
            <td>{{$key+1}}</td>
            <td>{!!$pen->nama!!}</td>
            <td>{!!$pen->jenis_kelamin!!}</td>
            <td>{!!$pen->jenis_identitas!!}</td>
            <td>{!!$pen->no_identitas!!}</td>
            <td><img width ="100px" src="/image/{{$pen->foto_identitas}}"></td>
            <td>{!!$pen->alamat!!}</td>
            <td>{!!$pen->no_hp!!}</td>
            <td>{!!$pen->email!!}</td>
            <td>{!!$pen->anggota!!}</td>
            <td><?=date('d F Y', strtotime($pen->tanggal_berangkat));?></td>
            <td><?=date('d F Y', strtotime($pen->tanggal_kembali));?></td>
            <td>
            <?php
              if( $pen->status  == 'Baru Daftar'){ ?>
              <span class="badge badge-primary"><?php echo $pen->status; ?></span>
              <?php }

              else if ( $pen->status == 'Dikonfirmasi'){ ?>
                <span class="badge badge-secondary"><?php echo $pen->status; ?></span>
                <?php }

              else if ( $pen->status == 'Diizinkan'){ ?>
              <span class="badge badge-success"><?php echo $pen->status; ?></span>
              <?php }

              else if ( $pen->status == 'Selesai'){ ?>
                <span class="badge badge-dark"><?php echo $pen->status; ?></span>
                <?php }

              else{ ?>
                <span class="badge badge-danger"><?php echo $pen->status; ?></span>
                <?php }

            ?>
 </td>
            <td width="20%" style="text-align: center;">
            <a href="{{ route('pendaki.edit', ['id_pendaki' => $pen->id_pendaki]) }}" class="btn btn-sm btn-warning">
                <i class="far fa-edit"></i>
                Edit
            </a>
            <a href="{{ route('pendaki.delete', ['id_pendaki' => $pen->id_pendaki]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')">
                 <i class="far fa-trash-alt"></i>
                Hapus
            </a>
            <!-- <a href="{{ route('pendaki.email', ['id_pendaki' => $pen->id_pendaki]) }}" class="btn btn-sm btn-primary">
                <i class="fas fa-paper-plane"></i>
                Kirim WA
            </a> -->
            </td>
        </tr>
        @endforeach
    </thead>
  </table>
  <br>

Showing {{ $pendaki->currentPage() }} to {{ $pendaki->total() }} of {{ $pendaki->perPage() }} entries
<br>
<br>
{{ $pendaki->links() }}
                           
  &nbsp
  <div class="card catatan bg-primary">
  &nbsp
    <h5>Catatan :</h5>
    <ul>
        <li>Data Pendaki dapat ditambah, diedit dan dihapus</li>
    </ul>
  </div>
</section>

<div class="modal fade" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin untuk menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>

@endsection()

