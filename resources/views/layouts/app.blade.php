<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Site Sniper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/BQ5rqoUxsfQGHC35jWa5Ub/icons.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('vendor/owl.carousel/assets/owl.theme.default.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ URL::asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/sweetalert_1_0.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top"><a href="index.html" class="navbar-brand">Site Sniper</a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span></span><span></span><span></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto align-items-start align-items-lg-center">
            <li class="nav-item"><a href="#features" class="nav-link link-scroll">Features</a></li>
            <li class="nav-item"><a href="text.html" class="nav-link">Login</a></li>
          </ul>
          <div class="navbar-text">   
            <!-- Button trigger modal--><a href="#" data-toggle="modal" data-target="#signupModal" class="btn btn-primary navbar-btn btn-shadow btn-gradient">Sign Up</a>
          </div>
        </div>
      </nav>
    </header>
    @yield('content')
    <footer>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <p>&copy; 2017 Landy.com. All rights reserved.                        </p>
            </div>
            <div class="col-md-5 text-right">
              <p>Template By <a href="#">Bootstrapious</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/front.js') }}"></script>
    <!-- Sweet Alert JS -->
    <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
    @include('sweet::alert')
  </body>
</html>