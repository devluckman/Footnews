<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Berita - FootNews</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>
  <?php include("koneksi.php");
  if (isset($_GET['id'])) {
      $id=$_GET['id'];
      $proses=$mysqli->query("select * from sepakbola where id=$id");
      $data=$proses->fetch_object();
  }?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.php">Berita</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="form.php">Create</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <!--judul-->
              <h1><?php echo $data->judul_berita; ?></h1>

              <span class="meta">Posted by
                <a href="index.php">FootNews</a>
                <!--Tanggal-->
                <?php echo  $data->tanggal;?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
              <!-- gambar -->
              <img style="height:300px;" src="image/<?php echo $data->gambar ?>" class="rounded mx-auto d-block">
              <!--deskripsi gambar-->
              <p class="text-center"><?php echo $data->deskripsi_gambar; ?></p>
            <!--paragraf 1-->
            <p class="text-justify"><?php echo $data->deskripsi_berita1; ?></p>
            <!--paragraf 2-->
            <p class="text-justify"><?php echo $data->deskripsi_berita2; ?></p>
            <!--paragraf 3-->
            <p class="text-justify"><?php echo $data->deskripsi_berita3; ?></p>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="delete.php?id=<?php echo $data->id; ?>">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="update.php?id=<?php echo $data->id; ?>">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-history fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Cofferight &copy; Orang Tampan</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
