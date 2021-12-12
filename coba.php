<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!--<meta name="dicoding:email" content="alifadityarahman18@gmail.com">-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Use the power of Machine Learning to diagnose TB from chest x-rays.">

  <!-- Title and Icon -->
  <title>Skin Cancer Checker</title>
  <link rel="shortcut icon" href="img/LogoSCC.png" type="image/x-icon">

  <!-- Style CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/own.css">
  <link rel="stylesheet" href="css/tooplate-style.css">
  <style>
    .app_container {
  width: 500px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.content {
  display: flex;
  flex-direction: column;
}
.button_container {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  margin: 15px;
}
body {
  background-color: linen;
}
.stream {
  display: flex;
  overflow: hidden;
}
.card {
  min-width: 320px;
}

  </style>
</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


  <!-- PRE LOADER -->
  <!-- <section class="preloader">
    <div id="preloader">
      <img class="preloader" src="img/loaders/heartloading2.gif">
    </div>
  </section> -->


  <!-- HEADER -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-5" id="top">
          <p>
            Welcome to Skin Cancer Checker!
          </p>
        </div>
        <div class="col-md-8 col-sm-7 text-align-right">
          <span class="phone-icon"><i class="fa fa-phone"></i>
            <a href="https://wa.me/6285334234513/">
              +62 853-3423-4513
            </a>
          </span>
          <span class="date-icon"><i class="fa fa-calendar-plus-o"></i>
            Available 24 hours
          </span>
          <span class="email-icon"><i class="fa fa-envelope-o"></i>
            <a
              href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvnqzmmRCJmKVvDTzmMZtNDFmwJLkBbSqQXRBVrMRrTlpkplFRQbLDGlzNZtLrDlVLtRgB">
              alifadityarahman18@gmail.com
            </a>
          </span>
        </div>
      </div>
    </div>
  </header>


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
          Skin Cancer Checker
        </a>
      </div>

      <!-- MENU LINKS -->
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#top">Home</a></li>
          <li><a href="#prediksi">Prediction</a></li>
          <li><a href="#tentangkami">About Me</a></li>
          <li><a href="coba.php">Coba</a></li>
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

      <video
      width="320"
      height="240"
      autoplay
      playsinline
      muted
      id="player"
    ></video>    <!-- Play the webcam feed through this video tag. -->
    <button id="capture">FOto</button>
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
              Skin Cancer Checker <br>
              Is a special web application that can check and predict the presence of skin cancer.<br><br>
              <img class="logo" src="img/LogoSCC.png">
              Skin Cancer Checker
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
              <div class="stories-image">
                <a href="#">
                  <img src="img/alif_aditya_rahman.jpg" class="img-responsive wow fadeInUp" data-wow-delay="0.6s"
                    alt="">
                </a>
              </div>
              <div class="stories-info">
                <a href="https://www.linkedin.com/in/alifadityarahman/">
                  <h5 class="wow fadeInUp" data-wow-delay="0.6s">
                    Alif Aditya Rahman
                  </h5>
                </a>
                <span class="wow fadeInUp" data-wow-delay="0.6s">
                  182410101075
                </span>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Me -->
        <div class="col-md-4 col-sm-4" id="kontakkami">
          <div class="footer-thumb">
            <div class="opening-hours">
              <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                Contact Me
              </h4>
              <div class="contact-info">
                <p>
                  <a href="https://wa.me/6285334234513/" class="wow fadeInUp" data-wow-delay="0.6s">
                    <i class="fa fa-phone"></i>
                    +62 853-3423-4513
                  </a>
                </p>
                <p>
                  <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJvnqzmmRCJmKVvDTzmMZtNDFmwJLkBbSqQXRBVrMRrTlpkplFRQbLDGlzNZtLrDlVLtRgB"
                    class="wow fadeInUp" data-wow-delay="0.6s">
                    <i class="fa fa-envelope-o"></i>
                    alifadityarahman18@gmail.com
                  </a>
                </p>
              </div>
              <br>
            </div>

            <!-- Social Media -->
            <ul class="social-icon">
              <li>
                <a href="https://web.facebook.com/alifadityarahman.AAR/" class="fa fa-facebook-square wow fadeInUp"
                  data-wow-delay="0.6s" attr="facebook icon">
                </a>
              </li>
              <li>
                <a href="https://twitter.com/AlifAditya_R" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.6s">
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/alifadityar_/" class="fa fa-instagram wow fadeInUp"
                  data-wow-delay="0.6s">
                </a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/alifadityarahman/" class="fa fa-linkedin wow fadeInUp"
                  data-wow-delay="0.6s">
                </a>
              </li>
            </ul>

          </div>
        </div>

        <!-- Foot page -->
        <div class="col-md-12 col-sm-12 border-top">

          <!-- Copyright -->
          <div class="col-md-4 col-sm-6">
            <div class="copyright-text">
              <p>Copyright &copy; 2020 Skin Cancer Checker</p>
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


  <script>
      // The DOM element of the video tag is designated as the "player".
      var player = document.getElementById("player");

	  // If the permission to use the webcam is approved, the webcam streaming video is designated as the source object of the "player".
      var handleSuccess = function (stream) {
        player.srcObject = stream;
      };

      navigator.mediaDevices.getUserMedia({ video: true }).then(handleSuccess);
        // Use the mediaDevices interface of the current browser object (navigator) to receive the user's permission to use the media input device.
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet"></script>


</body>

</html>
