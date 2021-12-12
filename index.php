<?php
	if($_SERVER['HTTPS']!="on")
	{
		 $redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		 header("Location:$redirect");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!--<meta name="dicoding:email" content="indsmnz15@gmail.com">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Use the power of Machine Learning to diagnose TB from chest x-rays.">

  <!-- Title and Icon -->
  <title>Image Classification with Convolutional Neural Network Method</title>
  <link rel="shortcut icon" href="img/LogoSCC.png" type="image/x-icon">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/own.css">
  <link rel="stylesheet" href="css/tooplate-style.css">
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


  <!-- PRE LOADER -->
  <section class="preloader">
    <div id="preloader">
      <img class="preloader" src="img/loaders/heartloading2.gif">
    </div>
  </section>


  <!-- HEADER -->
  <!-- <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-5" id="top">
          <p>
            Welcome to Image Classification with Convolutional Neural Network Method!
          </p>
        </div>
        <div class="col-md-8 col-sm-7 text-align-right">
          <span class="phone-icon"><i class="fa fa-phone"></i>
            <a href="https://wa.me//">
              +62 853-3423-4513
            </a>
          </span>
          <span class="date-icon"><i class="fa fa-calendar-plus-o"></i>
            Available 24 hours
          </span>
          <span class="email-icon"><i class="fa fa-envelope-o"></i>
            <a
              href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvnqzmmRCJmKVvDTzmMZtNDFmwJLkBbSqQXRBVrMRrTlpkplFRQbLDGlzNZtLrDlVLtRgB">
              indsmnz15@gmail.com
            </a>
          </span>
        </div>
      </div>
    </div>
  </header> -->


  <!-- MENU -->
  <section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <!-- lOGO -->
        <a href="index.html">
          <img class="logo" src="img/LogoSCC.png">
          Image Classification with Convolutional Neural Network Method
        </a>
      </div>

      <!-- MENU LINKS -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#top">Home</a></li>
          <li><a href="#prediksi">Prediction</a></li>
          <li><a href="#tentangkami">About We</a></li>
          <!-- <li><a href="text.php">Coba</a></li> -->
        </ul>
      </div>

    </div>
  </section>
  <br><br>


  <!-- HOME -->
  <section style="text-align: center;">
    <main role="main" class="container mt-5">
        <div class="col-12">
          <div class="progress progress-bar progress-bar-striped progress-bar-animated mb-2">
            Loading Model
          </div>
        </div>

      <!-- Upload Photo -->
      <h4 class="wow fadeInUp" data-wow-delay="0.5s">
        Please Select and Enter Your Photo
      </h4>
      <div class="row wow fadeInUp" data-wow-delay="0.5s">
        <div class="col-6">
          <input id="image-selector" class="form-control border-0" type="file" accept="image/*" capture>
        </div>
        <div class="col-6">
        </div>
      </div>
      <hr>

      <!-- Take Photo -->
      <h4 class="wow fadeInUp" data-wow-delay="1s">
        Or Take Photo Of Your Now
      </h4>
      <div class="row wow fadeInUp" id="prediksi" data-wow-delay="1s">
        <div class="col-6">
          <div class="camera">
            <video id="video">
              Video stream not available.
            </video>
            <button id="startbutton">
              Take Photo Now
            </button>
          </div>
        </div>
        <div class="col6">
          <canvas id="canvas"></canvas>
          <div class="output">
            <img id="photo" alt="The screen capture will appear in this box." width="244" height="244">
          </div>
        </div>
      </div>

      <!-- Prediction -->
      <div class="row wow fadeInUp" data-wow-delay="0.6s">
        <div class="col-6">
          <h2 class="ml-3">
            Prediction
          </h2>
          <button id="predict-button" class="btn btn-primary float-right">
            Predict Now
          </button>
          <br><br><br>
          <h4>
            <ul id="prediction-list" style="list-style-type: none;"></ul>
          </h4>
        </div>
      </div>

    </main>
  </section>


  <!-- FOOTER -->
  <footer data-stellar-background-ratio="5" id="tentangkami">
    <div class="container">
      <div class="row">

        <!-- About -->
        <div class="col-md-4 col-sm-4">
          <div class="footer-thumb">
            <h4 class="wow fadeInUp" data-wow-delay="0.4s">
              About
            </h4>
            <p class="wow fadeInUp" data-wow-delay="0.4s">
              Image Classification with Convolutional Neural Network Method <br>
              Membuat model untuk klasifikasi tanaman herbal, yaitu jahe dan
kunyit, menggunakan metode CNN. Dataset didapatkan dari hasil
akuisisi pribadi dan kombinasi dari dataset yang sudah ada.<br><br>
              <img class="logo" src="img/LogoSCC.png">
              Image Classification with Convolutional Neural Network Method
            </p>
          </div>
        </div>

        <!-- Developer -->
        <div class="col-md-4 col-sm-4">
          <div class="footer-thumb">
            <h4 class="wow fadeInUp" data-wow-delay="0.4s">
              Developer
            </h4>
            <div class="latest-stories">
              <!-- <div class="stories-image">
                <a href="#">
                  <img src="" class="img-responsive wow fadeInUp" data-wow-delay="0.6s"
                    alt="">
                </a>
              </div> -->
              <div class="stories-info">
                <!-- <a href="https://www.linkedin.com/in/coyz/"> -->
                  <h5 class="wow fadeInUp" data-wow-delay="0.6s">
                    Toriq Fatur Rohman
                  </h5>
                <!-- </a> -->
                <span class="wow fadeInUp" data-wow-delay="0.6s">
                  1810651100
                </span>
              </div>
              <div class="stories-info">
                <!-- <a href="https://www.linkedin.com/in/coyz/"> -->
                  <h5 class="wow fadeInUp" data-wow-delay="0.6s">
                    Muhammad Nurfakhri Zakiy
                  </h5>
                <!-- </a> -->
                <span class="wow fadeInUp" data-wow-delay="0.6s">
                  182410101044
                </span>
              </div>
              <div class="stories-info">
                <!-- <a href="https://www.linkedin.com/in/coyz/"> -->
                  <h5 class="wow fadeInUp" data-wow-delay="0.6s">
                    Ahmad Agung Zefi Syahputra
                  </h5>
                <!-- </a> -->
                <span class="wow fadeInUp" data-wow-delay="0.6s">
                  118140083
                </span>
              </div>
            </div>
          </div>
        </div>

        

        <!-- Foot page -->
        <div class="col-md-12 col-sm-12 border-top">

          <!-- Copyright -->
          <div class="col-md-4 col-sm-6">
            <div class="copyright-text">
              <p>Copyright &copy; 2021 UNUD-03 Kelompok 05</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="footer-link">
            </div>
          </div>

          <!-- Go to Top -->
          <div class="col-md-2 col-sm-2 text-align-center">
            <div class="angle-up-btn">
              <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s">
                <i class="fa fa-angle-up"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>


  <!-- SCRIPT JS -->
  <!-- Global Script -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js">
  </script>

  <!-- Local Script -->
  <script src="js/target_classes.js"></script>
  <script src="js/predic.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
