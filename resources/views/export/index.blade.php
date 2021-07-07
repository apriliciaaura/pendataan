@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Export Data Pendaki</h1>
  </div>

    <div class="card-body">
        <fieldset class="fieldset-border">
            <legend class="legend-border">Silahkan melakukan export data pendaki di bawah ini !</legend>
            <form action="" >
                <a href="pendaki/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
            </form>
        </fieldset>
    </div>
                    
  &nbsp
  <div class="card catatan bg-primary">
  &nbsp
    <h5>Catatan :</h5>
    <ul>
        <li>Menu ini digunakan untuk mencetak laporan data pendaki dalam bentuk PDF</li>
    </ul>
  </div>
</section>
@endsection()