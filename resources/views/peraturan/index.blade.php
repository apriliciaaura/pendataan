@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Peraturan</h1>
  </div>

  <table class="table table-default table-bordered dataTable table-hover" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th style="text-align: center;vertical-align: middle;" width="100px">No.</th>
            <th style="text-align: center;vertical-align: middle;">Isi</th>
            <th style="text-align: center;vertical-align: middle;">Aksi</th>
         </tr>
         @foreach($peraturan as $key => $pe)
        <tr>
            <td style="text-align: center;vertical-align">{{$key+1}}</td>
            <td>{!!$pe->isi!!}</td>
            <td width="20%" style="text-align: center;">
            <a href="{{ route('peraturan.edit', ['id_peraturan' => $pe->id_peraturan]) }}" class="btn btn-sm btn-warning">
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
        <li>Peraturan Pendakian hanya dapat diedit, tidak dapat ditambah dan dihapus</li>
        <li>Peraturan Pendakian akan tampil di halaman awal user</li>
    </ul>
  </div>
</section>
@endsection()