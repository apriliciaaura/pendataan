<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="user/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Pendakian Gunung Batu Tulis</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="user/css/linearicons.css">
			<link rel="stylesheet" href="user/css/font-awesome.min.css">
			<link rel="stylesheet" href="user/css/bootstrap.css">
			<link rel="stylesheet" href="user/css/magnific-popup.css">
			<link rel="stylesheet" href="user/css/jquery-ui.css">
			<link rel="stylesheet" href="user/css/nice-select.css">
			<link rel="stylesheet" href="user/css/animate.min.css">
			<link rel="stylesheet" href="user/css/owl.carousel.css">
			<link rel="stylesheet" href="user/css/main.css">
		</head>
		<body>
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  		</div>
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="user/img/logo1.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="/">Home</a></li>
				          <li><a href="{{ route('auth') }}">Admin</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->
					</div>
				</div>
			</header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6 class="text-white">Pendakian Gunung</h6>
							<h1 class="text-white">Batu Tulis</h1>
							<a data-toggle="modal" data-target="#exampleModal" class="primary-btn text-uppercase">Daftar</a>
                            @if (session('status'))
                                <div class="alert alert-success mt-2">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
						</div>
			</section>
			<!-- End banner Area -->

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Gunung Batu Tulis</h1>
								<br>
		                    </div>
							{!! $gunung->isi !!}
		                </div>
		            </div>
			</section>
			<!-- End popular-destination Area -->

			<!-- Start popular-destination Area -->
			<section class="popular-destination-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Peraturan Pendakian</h1>
								<br>
		                    </div>
							{!! $aturan->isi !!}
		                </div>
		            </div>
			</section>
			<!-- End popular-destination Area -->

			<!-- Start blog Area -->
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Pengumuman</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-recent-blog-carusel">
                            @foreach($pengumuman as $p)
							<div class="single-recent-blog-post item">
								<div class="thumb">
								</div>
								<div class="details">
									<h4 class="title">{{ $p->judul }}</h4>
									{!! $p->isi !!}
									<h6 class="date">{{ $p->tanggal->format('j F Y') }}</h6>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End recent-blog Area -->

      <!-- Start blog Area -->
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Berita</h1>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-recent-blog-carusel">
                            @foreach($berita as $b)
							<div class="single-recent-blog-post item">

								<div class="details">

									<h4 class="title">{{ $b->judul }}</h4>
									{!! $b->isi !!}
									<h6 class="date">{{ $b->tanggal->format('j F Y') }}</h6>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
				</div>
			</section>
			<!-- End recent-blog Area -->

			<!-- Start other-issue Area -->
			<section class="other-issue-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-9">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Galeri</h1>
		                    </div>
		                </div>
		            </div>
					<div class="row">
                        @foreach($galeri as $g)
						<div class="col-lg-3 col-md-6">
							<div class="single-other-issue">
								<div class="thumb">
									<img class="img-fluid" src="/image/{{$g->gambar}}" alt="">
								</div>
								<div class="title text-center">
									<h4>{{ $g->keterangan }}</h4>
								</div>
								</a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</section>
			<!-- End other-issue Area -->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">

					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Website</h6>
								<p>
									Sistem Informasi Pendataan Pendakian Gunung Batu Tulis merupakan sebuah sistem yang digunakan untuk mendaftar pendakian secara online serta mengetahui informasi mengenai pendakian.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Contact Us</h6>
								<div class="row">
									<div class="col">
										<ul>
											<p>Address : Precet, Parangargo, Doko, Malang, Jawa Timur 65158</p>
											<p>Email : gunung.batutulis@gmail.com </p>
											<p>Phone : 0341-456-789</p>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28647.05289381579!2d112.49408403920046!3d-7.966088448372808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7883a1ffebd02d%3A0x181f7dcdc0b8ec2!2sPuncak%20Batu%20Tulis!5e1!3m2!1sid!2sid!4v1625816760865!5m2!1sid!2sid" width="550" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="user/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="user/js/popper.min.js"></script>
			<script src="user/js/vendor/bootstrap.min.js"></script>
			<script src="user/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="user/js/jquery-ui.js"></script>
  			<script src="user/js/easing.min.js"></script>
			<script src="user/js/hoverIntent.js"></script>
			<script src="user/js/superfish.min.js"></script>
			<script src="user/js/jquery.ajaxchimp.min.js"></script>
			<script src="user/js/jquery.magnific-popup.min.js"></script>
			<script src="user/js/jquery.nice-select.min.js"></script>
			<script src="user/js/owl.carousel.min.js"></script>
			<script src="user/js/mail-script.js"></script>
			<script src="user/js/main.js"></script>
			

            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Selamat datang di Registrasi Online</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
		Sebelum melakukan registrasi, bagi setiap individu yang ingin melakukan pendakian dipersilahkan untuk mencermati tata cara registrasi dengan seksama di halaman awal. Peraturan dan Larangan merupakan hal yang harus ditaati oleh calon pendaki.
		<form method="POST" action="" enctype="multipart/form-data">
                @csrf
				<br>
                <div class="form-group">
                  <label for="nama">Nama Ketua</label>
                  <input type="text" class="form-control" id="nama"  name="nama" required>
                  {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
                <div class="form-group">
                  <label for="jenis_kelamin">Jenis Kelamin</label>
                  <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                    @foreach($jk as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="jenis_identitas">Jenis Identitas</label>
                  <select class="form-control" name="jenis_identitas" id="jenis_identitas" required>
                    @foreach($identitas as $j)
                    <option value="{{ $j }}">{{ $j }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                    <label for="no_identitas">No. Identitas</label>
                    <input type="text" class="form-control" id="no_identitas" name="no_identitas" required>
                </div>
				<div class="form-group">
                    <label for="">Foto Identitas :</label>
					<input type="file" class="form-control-file" name="foto_identitas">
				</div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
				<div class="form-group">
                  <label for="anggota">Nama Anggota (Jika tidak ada isi dengan "Tidak ada")</label>
                  <input type="text" class="form-control" id="anggota"  name="anggota" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_berangkat">Tanggal Berangkat</label>
                    <input type="date" class="form-control" id="tanggal_berangkat" name="tanggal_berangkat" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_kembali">Tanggal Kembali</label>
                    <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Submit</button>
              </form> --}}
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button></form>
        </div>
      </div>
    </div>
  </div>
		</body>
	</html>