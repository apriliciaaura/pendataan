@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Data Gunung</h1>
  </div>

  <table class="table table-default table-bordered dataTable table-hover" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th style="text-align: center;vertical-align: middle;" width="100px">No.</th>
            <th style="text-align: center;vertical-align: middle;">Isi</th>
            <th style="text-align: center;vertical-align: middle;">Aksi</th>
         </tr>
         @foreach($gunung as $key => $g)
        <tr>
            <td  style="text-align: center;vertical-align">{{$key+1}}</td>
            <td>{!!$g->isi!!}</td>
            <td width="20%" style="text-align: center;">
            <a href="{{ route('gunung.edit', ['id_gunung' => $g->id_gunung]) }}" class="btn btn-sm btn-warning">
            <i class="far fa-edit"></i>
                Edit
            </a>
            </td>
        </tr>
        @endforeach
    </thead>
  </table>
                           
  &nbsp
  <div class="card catatan bg-primary">
  &nbsp
    <h5>Catatan :</h5>
    <ul>
        <li>Data Gunung hanya dapat diedit, tidak dapat ditambah dan dihapus</li>
        <li>Data Gunung akan tampil di halaman awal user</li>
    </ul>
  </div>
</section>
@endsection()