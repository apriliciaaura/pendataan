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
		                        <h1 class="mb-10">Deskripsi</h1>
		                        {!! $gunung->isi !!}
		                    </div>
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
                                {!! $aturan->isi !!}
		                    </div>
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
									<a href="#"><h4 class="title">{{ $p->judul }}</h4></a>
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

									<a href="#"><h4 class="title">{{ $b->judul }}</h4></a>
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
								<a href="#">
									<h4>{{ $g->keterangan }}</h4>
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
								<h6>About Agency</h6>
								<p>
									The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Navigation Links</h6>
								<div class="row">
									<div class="col">
										<ul>
											<li><a href="#">Home</a></li>
											<li><a href="#">Feature</a></li>
											<li><a href="#">Services</a></li>
											<li><a href="#">Portfolio</a></li>
										</ul>
									</div>
									<div class="col">
										<ul>
											<li><a href="#">Team</a></li>
											<li><a href="#">Pricing</a></li>
											<li><a href="#">Blog</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>
									For business professionals caught between high OEM price and mediocre print and graphic output.
								</p>
								<div id="mc_embed_signup">
									<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
										<div class="input-group d-flex flex-row">
											<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
											<button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
										</div>
										<div class="mt-10 info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20">InstaFeed</h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/i1.jpg" alt=""></li>
									<li><img src="img/i2.jpg" alt=""></li>
									<li><img src="img/i3.jpg" alt=""></li>
									<li><img src="img/i4.jpg" alt=""></li>
									<li><img src="img/i5.jpg" alt=""></li>
									<li><img src="img/i6.jpg" alt=""></li>
									<li><img src="img/i7.jpg" alt=""></li>
									<li><img src="img/i8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row footer-bottom d-flex justify-content-between align-items-center">
						<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Daftar Pendakian</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama Pendaki</label>
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
