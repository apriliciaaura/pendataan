<?php
$conn = mysqli_connect('localhost','root','','pendakian');

$get1 = mysqli_query($conn, "select * from pendaki where status='Baru daftar'");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($conn, "select * from pendaki where status='Dikonfirmasi'");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($conn, "select * from pendaki where status='Diizinkan'");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($conn, "select * from pendaki where status='Ditolak'");
$count4 = mysqli_num_rows($get4);
?>

@extends('layouts.adminmain')
@section('content')
<section class="section">
  
  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="row">
           <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-user-plus"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Baru Daftar</h4>
                  </div>
                  <div class="card-body">
                  <?=$count1; ?>
                  </div>
                </div>
              </div>
            </div>
        </a>
           <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                  <i class="fas fa-user-tag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Dikonfirmasi</h4>
                  </div>
                  <div class="card-body">
                  <?=$count2; ?>
                  </div>
                </div>
              </div>
            </div>
        </a>
           <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-user-check"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Diizinkan</h4>
                  </div>
                  <div class="card-body">
                  <?=$count3; ?>
                  </div>
                </div>
              </div>
            </div>
        </a>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user-times"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Ditolak</h4>
                  </div>
                  <div class="card-body">
                  <?=$count4; ?>
                  </div>
                </div>
              </div>
            </div>
        </a>
          </div>
</section>
@endsection()