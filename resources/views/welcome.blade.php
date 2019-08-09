<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KITACUCI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

 
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="background-color: #e3f2fd"  id="ftco-navbar">
	    <div class="container">
      <div class="col-md-4">
        <a class="btn btn-primary btn-lg" class="navbar-brand" href="/">Kitacuci</a>
        </div>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Beranda</a></li>
	          <li class="nav-item"><a href="#service" class="nav-link">Pemesanan</a></li>
            <li class="nav-item"><a href="#pricing" class="nav-link">Layanan</a></li>
            <li class="nav-item"><a href="#checking" class="nav-link">Cek Pesanan</a></li>
	          <li class="nav-item"><a href="#contacts" class="nav-link">Kontak</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
           
            <img src="images/dago.png" class="img-fluid" width="4000px" height="3900px" >
            <img src="images/pickup.png" class="img-fluid">
           
          </div>
          <div class="one-half align-self-lg-end align-self-lg-center">
          	<div class="slider-carousel owl-carousel">
          		<div class="item">
			          <img src="images/dashboard_full_1.png" class="img-fluid">
		          </div>
		        
		          <div class="item">
			          <img src="images/deliv2.png" class="img-fluid img"alt="">
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </div>
  

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-11">
		    		<div class="row">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section id="service" class="ftco-section bg-light">
      
    
    <form action="/pemesanan" method="POST"><center>
    {{ csrf_field() }}
    <h2>FORM PEMESANAN</h2>
    <br>
            <div class="col-md-4 btn btn-outline-primary"  align="center"> 
              <div class="wrap-input100 m-b-10 validate-input" data-validate="Name is required">
              <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
              <span class="focus-input100"></span>
              </div>
            </div><br>
            <div class="col-md-4 btn btn-outline-primary">
              <div class="wrap-input100 m-b-10 validate-input" data-validate="Name is required">
                          <input class="form-control" type="text" name="telpon" placeholder="Telepon">
              <span class="focus-input100"></span>
              </div>
					  </div><br>
            <div class="col-md-4 btn btn-outline-primary">
            <div class="wrap-input100 m-b-10 validate-input" data-validate="Name is required">
                        <input class="form-control" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					  </div>
            </div><br>
            <div class="col-md-4 btn btn-outline-primary">
            <div class="wrap-input100 m-b-10 validate-input" data-validate="Name is required">
                        <input class="form-control" type="text" name="alamat" placeholder="Alamat">
                    <span class="focus-input100"></span>
                  </div>
            </div><br>
            <div class="col-md-4 btn btn-outline-primary">
                        <select class="form-control" name="laundry">
                        <option>Cuci Sepatu</option>
                        <option>Cuci Pakaian</option>
                        </select>
            </div><br>
            <div class="col-md-4 btn btn-outline-primary">
                        <select class="form-control" name="jenis">
                        <option>Service Normal</option>
                        <option>Service Express</option>
                        </select>
            </div><br>
            
					<div class="col-md-4 btn btn-outline-primary">
                        <select class="form-control" name="pembayaran">
                        <option value="TBank">Transfer Bank</option>
                        <option value="ovo">OVO</option>
						<option value="COD">COD (Cash on Delivery)</option>
                        </select>
          </div>
					
          </div>
          <br>
          <br>
					<div class="col-md-4">
          <button  class="btn btn-secondary btn-lg" type="submit">PESAN</button>
          </div>
        </form></center>
     
        <center><img src="images/dago2.png" class="img-fluid"></center>
</section>



    <section id="pricing" class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-1">Harga Laundry Kitacuci</h2>
            <span class="subheading">Rician Harga</span>
          </div>
        </div>
    		<div class="row">
	        <div class="col-md-1 ftco-animate">
	        </div>
	        <div class="col-md-5 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Cuci Sepatu</h2>
	            <span class="price"><sup>Rp</sup> <span class="number">10.000</span></span>
	            <span class="excerpt d-block">Harga Promo</span>
	            <a href="#service" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Pesan</a>
	            
	            <h3 class="heading-2 mb-4">Layanan Tersedia</h3>
	            
	            <ul class="pricing-text">
	              <li><strong><td>Harga Normal</td></strong> Rp 30.000</li>
	              <li><strong>Potangan</strong> Rp 20.000</li>
	              <li><strong>Total Harga</strong> Rp 10.000</li>
	              <li>Promo Terbatas</li>
	            </ul>
	            </div>
	          </div>
          </div>
          
	        <div class="col-md-5 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Cuci Pakaian Kiloan</h2>
	            <span class="price"><sup>Rp</sup> <span class="number">5.000/Kg</span></span>
	            <span class="excerpt d-block">Harga Perkilo</span>
	            <a href="#service" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Pesan</a>
	            
	            <h3 class="heading-2 mb-4">Layanan Tersedia</h3>
	            
	            <ul class="pricing-text">
              <li><strong><td>Harga Normal</td></strong> Rp 5.000/Kg</li>
	              <li><strong>Potangan</strong> - </li>
	              <li><strong>Total Harga</strong> Rp 5.000/Kg</li>
	              <li>Promo Terbatas</li>
	            </ul>
	            </div>
	          </div>
          </div>
          
	        <div id="checking" class="col-md-3 ftco-animate">
	        </div>
	      </div>
    	</div>
    </section>	

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>CEK STATUS CUCIAN KAMU</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">

                <form action="/search" method="POST" role="search" class="subscribe-form"> 
                  {{ csrf_field() }}
                  <div class="form-group d-flex">
                      <input type="text" class="form-control" name="q"
                      placeholder="Masukkan No Telpon Pelanggan"> <span class="input-group-btn">
                          <button type="submit" class="btn btn-default" style="width: 100%; height: 100%;">Cari</button>
                      </span>
                  </div>
              </form>

                <!-- <form action="/search" method="POST" role="search" class="subscribe-form">
                  {{ csrf_field() }}
                    <div class="form-group d-flex">
                    <input type="text" class="form-control" name="q" placeholder="No Pesanan / No Telpon">
                      <button type="submit" class="submit px-3">cek</button>
                    </div>
                  </form> -->
                  
                  <br>
                  <div class="container">
                    @if(isset($details))
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Tagihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->status}}</td>
                                <td>{{$user->qty*$user->price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 id="contacts" class="ftco-heading-2">KITACUCI</h2>
            </div>
            <p>kitacuci bergerak dibidang jasa laundry yang terdiri dari beberapa layanan seperti laundry sepatu, ransel hingga pakaian. 
              kitacuci menghadirkan kemudahan layanan bagi pelanggan dengan berbagai inovasi baru.</p>
          </div>
          <div class="col-md-2">
            <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Pembayaran</h2>
              <ul class="list-unstyled">
                <li><a href="#contacts" class="py-2 d-block">GO-Pay</a></li>
                <li><a href="#contacts" class="py-2 d-block">OVO</a></li>
                <li><a href="#contacts" class="py-2 d-block">ATM</a></li>
                <li><a href="#contacts" class="py-2 d-block">Dana</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 ml-md-5">
          <div class="ftco-footer-widget mb-8 ml-md-5">
              <h2 class="ftco-heading-2">Infomasi</h2>
              <ul class="list-unstyled">
                <li><a href="#contacts" class="py-2 d-block">Hubungi Kami</a></li>
                <li><a href="#contacts" class="py-2 d-block">Karir</a></li>
                <li><a href="#contacts" class="py-2 d-block">Tanya & Jawab</a></li>
                <li><a href="#contacts" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Kontak</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jln Terusan Cigadung, No. 6 Kota Bandung</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(+62) 8991334802</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cs@kitacuci.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>&copy;<script>document.write(new Date().getFullYear());</script> All rights reserved - <a href="https://colorlib.com" target="_blank">Kitacuci</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Request a Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control" id="appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control" id="appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Get a Quote" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>