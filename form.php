<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Create News - FootNews</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
		
		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h3 href="index.html">FootNews</h3>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="navbar-link" href="index.php">Home</a></li>
						<li><a class="navbar-link" href="about.html">About</a></li>
						<li><a class="navbar-link" href="form.php">Create</a></li>
					</ul>
				</div>
			</div>
		</nav>
				
        <!-- Top content -->
        <div class="top-content">
        	<div class="container">
        	
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1 class="wow fadeInLeftBig">Create Berita</h1>
						<div class="description wow fadeInLeftBig">
							<p>
								Masukan berita yang valid pada form ini, jangan berita hoax!
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 r-form-1-box wow fadeInUp">
						<div class="r-form-1-top">
							<div class="r-form-1-top-left">
								<h3>FootNews</h3>
								<p>Berita Sepak Bola Dunia</p>
							</div>
							<div class="r-form-1-top-right">
								<i class="fa fa-pencil"></i>
							</div>
						</div>
						<div class="r-form-1-bottom">
							<form role="form" action="input.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label class="sr-only" for="r-form-1-judul">Judul Berita</label>
									<input type="text" name="judul" placeholder="Judul Berita..." class="r-form-1-judul form-control" id="r-form-1-judul" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="r-form-1-tgl">Tanggal</label>
									<input type="text" name="tanggal" placeholder="Tanggal..." class="r-form-1-tgl form-control" id="r-form-1-tgl" required>
								</div>
								<div class="form-group">
									<label class="sr-only" for="img">Gambar</label>
									<input type="file" name="gambar" class="r-form-1-img form-control" id="img" required>
								</div>
                                <div class="form-group">
                                    <label class="sr-only" for="r-form-1-deksimg">Judul Berita</label>
                                    <input type="text" name="deskimg" placeholder="Deskripsi Gambar..." class="r-form-1-deksimg form-control" id="r-form-1-deksimg" required>
                                </div>
								<div class="form-group">
									<label class="sr-only" for="r-form-1-deks1">Deskripsi Berita</label>
									<textarea name="desk1" placeholder="Deskripsi Berita...(Paragraf 1)"
											  class="r-form-1-deks1 form-control" id="r-form-1-deks1" required></textarea>
								</div>
								<div class="form-group">
									<label class="sr-only" for="r-form-1-deks2">Deskripsi Berita</label>
									<textarea name="desk2" placeholder="Deskripsi Berita...(Paragraf 2)"
											  class="r-form-1-deks2 form-control" id="r-form-1-deks2" required></textarea>
								</div>
                                <div class="form-group">
                                    <label class="sr-only" for="r-form-1-deks3">Deskripsi Berita</label>
                                    <textarea name="desk3" placeholder="Deskripsi Berita...(Paragraf 3)"
                                              class="r-form-1-deks3 form-control" id="r-form-1-deks3" required></textarea>
                                </div>
								<button type="submit" class="btn" name="input">Ceate</button>
							</form>
						</div>
					</div>
				</div>
                
            </div>
        </div>

        
        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-4 footer-about wow fadeInUp">
	        			<h3>About Me</h3>
	        			<p>
							Nama saya Lukmanul Hakim, biasa di panggil Lukman, Imam, Alex , saya asli Bandung Tepatnya di Nagreg,
							saat ini saya sedang menapaki jenjang perkuliah di sebuah Universitas di Bandung.
	        			</p>
	        			<p>
                    		<a href="about.html">Learn More</a>
                    	</p>
                    </div>
	        		<div class="col-sm-4 footer-contact-info wow fadeInDown">
	        			<h3>Contact Info</h3>
	                	<p><i class="fa fa-map-marker"></i> Nagreg City, Bandung Indonesia</p>
	                	<p><i class="fa fa-phone"></i> Phone: +62-89686777832</p>
	                	<p><i class="fa fa-envelope"></i> Email: <a href="mailto:say.luckmann@gmail.com">say.luckmann@gmail.com</a></p>
	                	<p><i class="fa fa-github"></i> Github: <a href="https://github.com/uckm">Lukmanul Hakim</a> </p>
                    </div>
                    <div class="col-sm-4 footer-social wow fadeInUp">
                    	<h3>Social</h3>
                    	<p>
							<a href="https://www.twitter.com/Silver_Say"><i class="fa fa-twitter"></i></a>
							<a href="https://plus.google.com/102508656654371464673"><i class="fa fa-google-plus"></i></a>
							<a href="https://www.instagram.com/lhakim21"><i class="fa fa-instagram"></i></a>
							<a href="https://www.facebook.com/say.luckmann"><i class="fa fa-facebook"></i></a>
						</p>
                    </div>
	            </div>
	            <div class="row">
           			<div class="col-sm-6 footer-copyright">
                    	Cofferight &copy; Orang Tampan </a>
                    </div>
           			<div class="col-sm-6 footer-menu">
                    	<ul>
                    		<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="form.php">Create</a></li>
						</ul>
                    </div>
           		</div>
	        </div>
        </footer>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>