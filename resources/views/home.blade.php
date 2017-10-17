@extends('layouts.app')

@section('content')
<!-- Modal-->
    <section id="hero" class="hero hero-home bg-gray">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 text order-2 order-lg-1">
            <h1>Site Sniper</h1>
            <p class="hero-text">Take quick screenshots of any website. Enter a link below to try it out.</p>
            <div class="CTA"><a href="#features" class="btn btn-primary btn-shadow btn-gradient link-scroll">Discover More</a><a href="#" class="btn btn-outline-primary" data-toggle="modal" data-target="#signupModal">Sign Up Now</a></div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="img/Macbook.png" alt="..." class="img-fluid"></div>
 
        </div>
        <div class="row">
          <div class="col-lg-12 form-holder quick_sitesnap">
            <form id="quicksnapForm" action="{{ route('snapshots.store') }}" method="POST">
              <div class="form-group">
                <input type="url" name="website" id="website" placeholder="http://website.com">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary btn-gradient submit">Shoot Site</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="features" class="features">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="text col-lg-6 order-2 order-lg-1">
            <div class="icon"><img src="img/medal.svg" alt="..." class="img-fluid"></div>
            <h4>Save snapshots</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2"><img src="img/feature-1.png" alt="..." class="img-fluid"></div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="image col-lg-6"><img src="img/feature-2.png" alt="..." class="img-fluid"></div>
          <div class="text col-lg-6">
            <div class="icon"><img src="img/hourglass.svg" alt="..." class="img-fluid"></div>
            <h4>Setup schedules</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
          </div>
        </div>
        <div class="row d-flex align-items-center">
          <div class="text col-lg-6 order-2 order-lg-1">
            <div class="icon"><img src="img/cup.svg" alt="..." class="img-fluid"></div>
            <h4>Your peace of mind is our business</h4>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p><a href="#" class="btn btn-primary btn-shadow btn-gradient">View More</a>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2"><img src="img/feature-3.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
    
    <div id="scrollTop">
      <div class="d-flex align-items-center justify-content-end"><i class="fa fa-long-arrow-up"></i>To Top</div>
    </div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6"><a href="#" class="brand">Site Sniper</a>
            <ul class="contact-info list-unstyled">
              <li><a href="mailto:sales@landy.com">Sales@Landy.com</a></li>
              <li><a href="tel:123456789">+00 123 456 789</a></li>
            </ul>
            <ul class="social-icons list-inline">
              <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
@endsection
