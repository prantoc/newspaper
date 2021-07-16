<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <title>NewsPaper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16"> -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta name="theme-color" content="#fafafa">
  </head>
  <body>
    <!-- header -->
    <div class="container-fluid pt-4 pb-lg-3 px-lg-5">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-xs-center justify-content-sm-center justify-content-md-center justify-content-lg-start">
          <a href="{{route ('home')}}"><img style="max-width: 300px;" src="{{ asset('assets/img/dhaka-post.png')}}" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12  d-flex justify-content-lg-center justify-content-md-center justify-content-sm-center align-items-center">
          <span>
            <i class="fas fa-map-marker-alt"></i> <span>ঢাকা</span>
          </span>
          <span class="ms-2">
            <i class="far fa-calendar"></i><span> শুক্রবার, ১৮ জুন ২০২১</span>
          </span>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-center">
          <div class="d-flex align-items-center social-media-icons">
            <a href="{{route ('posts')}}" aria-label="Facebook" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon facebook"><i class="fab fa-facebook-f"></i></div>
            </a>
            <a href="{{route ('posts')}}" aria-label="Youtube" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon youtube"><i class="fab fa-youtube"></i></div>
            </a>
            <a href="{{route ('posts')}}" aria-label="Twitter" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon twitter"><i class="fab fa-twitter"></i></div>
            </a>
            <a href="{{route ('posts')}}" aria-label="Instagram" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon instagram"><i class="fab fa-instagram"></i></div>
            </a>
            <a href="{{route ('posts')}}" aria-label="Linkedin" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon linkedin"><i class="fab fa-linkedin-in"></i></div>
            </a>
            <a href="{{route ('posts')}}" aria-label="Google Podcast" target="_blank" class="p-1" rel="nofollow noopener">
              <div class="social-icon" style="background: #695296;"><i class="fas fa-podcast"></i></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
      <div class="container-fluid bg-nav">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route ('posts')}}">প্রচ্ছদ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">জাতীয়</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">রাজনীতি</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">আন্তর্জাতিক</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">অর্থনীতি</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">খেলা</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">বিনোদন</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{route ('posts')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                সারাদেশ
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">স্বাস্থ্য</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">শিক্ষা</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{route ('posts')}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ফিচার
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
                <li><a class="dropdown-item" href="{{route ('posts')}}">জেলার খবর</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">জবস</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">প্রবাস</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route ('posts')}}">ওয়েবস্টোরি</a>
            </li>
            <li class="nav-item position-static d-flex extra-nav d-lg-block d-md-none d-sm-none d-xs-none">
              <button class="navbar-toggler collapsed nav-link d-flex align-items-center" aria-expanded="false" type="button" data-toggle="collapse" data-target="#nav-items-2">
              <div class="button-bars">
                <i class="fas fa-bars"></i>
              </div>
              <span class="button-label">অন্যান্য</span>
              </button>
              <div class="dropdown-menu w-100 top-auto shadow border-0 rounded-0 nav-collapse collapse m-0" id="nav-items-2">
                <div class="container">
                  <div class="row w-100 csDrpdwn">
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">মতামত</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">ধর্ম</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">ছোটদের পোস্ট</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">ক্যাম্পাস</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">আইন-আদালত</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">সাহিত্য</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">নারী ও শিশু</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">কৃষি ও প্রকৃতি</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">এভিয়েশন</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">এক্সক্লুসিভ</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a target="_blank" href="{{route ('posts')}}">বাংলা
                      কনভার্টার</a>
                    </div>
                    <div class="col-sm-2 csDrpdwnItm">
                      <a href="{{route ('posts')}}">আর্কাইভ</a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <div class="box">
              <form name="search">
                <input type="text" class="input" >
              </form>
              <i class="fas fa-search top-search"></i>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <!-- mainArea -->
    <main role="main">


        @yield('content')

        
    </main>
        @include('layouts.footer')

    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </body>
</html>