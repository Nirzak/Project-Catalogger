@extends('frontView.master')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/aos.css">
    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/rangeslider.css">

    <link rel="stylesheet" href="{{ asset('frontEnd') }}/css/style.css">
    @endsection
  @section('js')
  <script src="{{ asset('frontEnd') }}/js/jquery-3.3.1.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery-ui.js"></script>
  <script src="{{ asset('frontEnd') }}/js/popper.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.countdown.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/bootstrap-datepicker.min.js"></script>
  <script src="{{ asset('frontEnd') }}/js/aos.js"></script>
  <script src="{{ asset('frontEnd') }}/js/rangeslider.min.js"></script>

  <script src="{{ asset('frontEnd') }}/js/main.js"></script>
  @endsection
  @section('mainContent')
  <div class="site-blocks-cover overlay" style="background-image: url({{ asset('frontEnd') }}/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Welcome To Project Directory</h1>
                <p data-aos="fade-up" data-aos-delay="100">Here You'll find all the informations of various project works under different courses</p>
              </div>
            </div>

            <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-7">
                    <input type="text" class="form-control rounded" placeholder="Search Any Projects Here?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="" id="">
                        <option value="">All Categories</option>
                        <option value="">Database Management System</option>
                        <option value="">Object Oriented Programming</option>
                        <option value="">Structure Programming</option>
                        <option value="">Project150</option>
                        <option value="">Project250</option>
                        <option value="">Project350</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                  </div>
                  
                </div>
              </form>
            </div>

            <div class="row text-left trending-search" data-aos="fade-up"  data-aos-delay="300">
              <div class="col-12">
                <h2 class="d-inline-block">You Can Search:</h2>
                <a href="#">Java Projects</a>
                <a href="#">DBMS Projects</a>
                <a href="#">Android App projects</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Categories By Courses</h2>
            <p class="color-black-opacity-5">Projects are Categorized Based On Courses</p>
          </div>
        </div>
        <div class="overlap-category mb-5">
          <div class="row align-items-stretch no-gutters">
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-car"></span></span>
                <span class="caption mb-2 d-block">Database Management Systems</span>
                <span class="number">23</span>
              </a>
            </div>

            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-closet"></span></span>
                <span class="caption mb-2 d-block">Object Oriented Programming</span>
                <span class="number">52</span>
              </a>
            </div>

            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-home"></span></span>
                <span class="caption mb-2 d-block">Project150</span>
                <span class="number">4,398</span>
              </a>
            </div>
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-open-book"></span></span>
                <span class="caption mb-2 d-block">Project250</span>
                <span class="number">3,298</span>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-tv"></span></span>
                <span class="caption mb-2 d-block">Project350</span>
                <span class="number">`143</span>
              </a>
            </div>
            
            <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
              <a href="#" class="popular-category h-100">
                <span class="icon"><span class="flaticon-pizza"></span></span>
                <span class="caption mb-2 d-block">Project450</span>
                <span class="number">183</span>
              </a>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
    @endsection