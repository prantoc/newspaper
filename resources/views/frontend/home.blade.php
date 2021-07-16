@extends('layouts.header')
@section('content')

      <!-- section-1 -->
      <div data-nosnippet="">
        <div class="container-fluid section-top mt-3 px-5">
          <div class="row">
            <div class="col-lg-6 col-md-12 top-left-section lead-top order-md-0 order-lg-1">
              <div class="row">
                <div class="col-12 lead-news">
                  <a href="{{route ('single-post')}}" class="news-item news-item-lead">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="করোনায় আরও ৮২ জনের মৃত্যু, শনাক্ত ৩৬৪১" class="lazyload img-loader">
                    </div>
                    <h2 class="title" style="margin: 10px 0">করোনায় আরও ৮২ জনের মৃত্যু, শনাক্ত ৩৬৪১</h2>
                    <span class="d-none d-sm-block">দেশে গত ২৪ ঘণ্টায় করোনাভাইরাসে আক্রান্ত আরও ৮২ জনের মৃত্যু হয়েছে। এ পর্যন্ত করোনায় দেশে মোট মৃত্যু হয়েছে ১৩ হাজার ৫৪৮ জনের...</span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 scaled lead-below-item">
                  <a href="{{route ('single-post')}}" class="news-item news-item-list">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="ভল্টের টাকা গায়েবের পর কী অবস্থা ঢাকা ব্যাংকের বংশাল শাখার" class="lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">ভল্টের টাকা গায়েবের পর কী অবস্থা ঢাকা ব্যাংকের বংশাল শাখার</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-6 scaled ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-list">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="বরিশালে ৭ পুলিশ বরখাস্তের রায় স্থগিত" class="lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">বরিশালে ৭ পুলিশ বরখাস্তের রায় স্থগিত</h2>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 top-list-1 order-md-1 order-lg-0">
              <div class="second-center scaled" style="background: #Eff5F4">
                <a href="{{route ('single-post')}}" class="news-item news-item-list py-2 ">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" alt="ফাইজারের টিকা দেওয়া শুরু সোমবার থেকে" class="lazyload img-loader">
                  </div>
                  <div class="">
                    <h2 class="title">ফাইজারের টিকা দেওয়া শুরু সোমবার থেকে</h2>
                  </div>
                </a>
                <a href="{{route ('single-post')}}" class="news-item news-item-list py-2 ">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" alt="আগে ছিলাম ভিখারি, এখন লাখপতি" class="lazyload img-loader">
                  </div>
                  <div class="">
                    <h2 class="title">আগে ছিলাম ভিখারি, এখন লাখপতি</h2>
                  </div>
                </a>
                <a href="{{route ('single-post')}}" class="news-item news-item-list py-2 ">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" alt="খুলনা বিভাগে করোনায় রেকর্ড ২৮ জনের মৃত্যু" class="lazyload img-loader">
                    <i class="fa fa-play-circle video-icon"></i>
                  </div>
                  <div class="">
                    <h2 class="title">খুলনা বিভাগে করোনায় রেকর্ড ২৮ জনের মৃত্যু</h2>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 order-lg-2">
              <div class="top-right m-pt-3">
                <div class="opinion-contents px-2">
                  <div class="category-header opinion-header d-flex justify-content-between align-items-center">
                    <div class="heading opinion-heading d-flex align-items-center">
                      <p class="title"><a href="{{route ('single-post')}}">মতামত</a></p>
                    </div>
                    <a href="{{route ('single-post')}}">
                      <div class="read-more d-flex justify-content-end align-items-center">
                        <p>আরও পড়ুন</p>
                        <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                      </div>
                    </a>
                  </div>
                  <div class="regular-list scaled ai-custom">
                    <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2 d-flex">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="কওমি মাদরাসা: শিশুদের মনস্তত্ত্ব, সংকট ও সমাধান" class="lazyload img-loader" style="border-radius: 50%;width: 90px;height: 90px;margin-right: 8px">
                      <div class="d-flex flex-column" style="">
                        <h2 class="title">কওমি মাদরাসা: শিশুদের মনস্তত্ত্ব, সংকট ও সমাধান</h2>
                        <p style="color: #696464;">রাশেক রহমান</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="advertisement mt-2">
                  <a href="{{route ('single-post')}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/copa2.jpg')}}" alt="">
                  </a>
                </div>
                <div class="advertisement mt-2">
                  <a href="{{route ('single-post')}}" target="_blank" class="d-flex justify-content-center">
                    <img src="{{ asset('assets/img/euro2.jpg')}}" alt="">
                  </a>
                </div>
                <div class="dpc mt-2">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-2 -->
      <div class="section-two py-3 bg-section-two m-pt-0 mt-3 m-mt-2 px-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-9 col-md-12 col-sm-12 special-top">
              <div class="row">
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">সৌদি আরবের করোনা উচ্চ ঝুঁকির তালিকায় বাংলাদেশ</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">পানির মূল্যবৃদ্ধির প্রতিবাদে ওয়াসাকে স্মারকলিপি দিল বিএনপি</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">সিনহা হত্যা মামলা : পলাতক আসামি কনস্টেবল সাগরের আত্মসমর্পণ</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">রামেকে এক দিনে রেকর্ড ১৮ জনের মৃত্যু</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                      <i class="fa fa-play-circle video-icon"></i>
                    </div>
                    <div class="">
                      <h2 class="title">র&zwnj;্যাঙ্ক ব্যাজ পরানো হলো নতুন সেনাপ্রধান শফিউদ্দিন আহমেদকে</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">মরুভূমির খেজুর এখন বাগেরহাটে</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news d-none d-sm-flex">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">শেষ মুহূর্তের গোলে কলম্বিয়াকে হারাল ব্রাজিল</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news d-none d-sm-flex">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">এসপি বিপ্লবের সহযোগিতায় আলমগীর ফিরে পেলেন ঘরসংসার</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news d-none d-sm-flex">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">কোম্পানীগঞ্জ অচল করে দেওয়ার হুমকি কাদের মির্জার</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">মরুভূমির খেজুর এখন বাগেরহাটে</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">মরুভূমির খেজুর এখন বাগেরহাটে</h2>
                    </div>
                  </a>
                </div>
                <div class="col-sm-4 box-news ">
                  <a href="{{route ('single-post')}}" class="news-item news-item-box m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <div class="">
                      <h2 class="title">মরুভূমির খেজুর এখন বাগেরহাটে</h2>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-12 col-sm-12 m-pt-3">
              <div class="recent-popular">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item side-news-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">সর্বশেষ</button>
                  </li>
                  <li class="nav-item side-news-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">সর্বাধিক পঠিত</button>
                  </li>
                </ul>
                <div class="tab-content  side-scroll-tab" id="pills-tabContent">
                  <div class="tab-pane fade show active px-sm-4" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                  </div>
                  <div class="tab-pane fade px-sm-4" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                    <a class="rp-item py-2 " href="{{route ('single-post')}}">
                      <div class="image-container">
                        <img class="img-loader" src="{{ asset('assets/img/s.jpg')}}"  width=130 height=90 alt="">
                      </div>
                      <h2 class="news-item-lite">
                      ৭১ দিনের মধ্যে সর্বোচ্চ শনাক্ত, মৃত্যু ৮১
                      </h2>
                    </a>
                  </div>
                </div>
                <div class="bg-tab-bottom text-center py-2">
                  <a style="font-size: 19px; color: #FFF" href="{{route ('single-post')}}">আজকের সব খবর</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-3 -->
      <div class="container-fluid px-5">
        <div class="d-flex flex-column pt-3">
          <div class="corona-special-widget2" style="flex: auto; background-repeat: no-repeat;">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 cw-show-border">
                <div class="d-flex cw-align-info flex-column">
                  <a class="cw-anchor-mn9" href="{{route ('single-post')}}">
                    <img src="{{ asset('assets/img/corona-title.png')}}" alt="" class="img-responsive img-fluid">
                  </a>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 d-flex cw-show-border">
                <div class="d-flex flex-column" style="flex: auto;">
                  <div class="d-flex justify-content-around align-items-center h-100">
                    <div class="d-flex flex-column mx-2 align-items-center">
                      <p class="cw-ts-fs" style="font-weight: bold">আক্রান্ত</p>
                      <p class="text-danger cw-info-fs cw-total-affected">৮,৯৬,৭৭০</p>
                    </div>
                    <div class="d-flex flex-column mx-2 align-items-center">
                      <p class="cw-ts-fs" style="font-weight: bold;">সুস্থ</p>
                      <p class="text-success cw-info-fs cw-total-recovered">৮,০৭,৬৭৩</p>
                    </div>
                    <div class="d-flex flex-column mx-2 align-items-center">
                      <p class="cw-ts-fs" style="font-weight: bold">মৃত্যু</p>
                      <p class="text-danger cw-info-fs cw-total-death">১৪,২৭৬</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 transform-image">
                <div class="h-100 d-flex cw-vaccine-info align-items-center" style="background-position: right; background-size: contain; background-repeat: no-repeat;">
                  <div class="d-flex flex-column mx-2 align-items-center">
                    <p class="cw-ts-fs" style="font-weight: bold">ভ্যাকসিন</p>
                    <p class="text-primary cw-info-fs cw-total-vaccinated">১,০১,৫৩,১০২</p>
                  </div>
                  <div class="d-flex flex-column mx-2 align-items-center">
                    <div class="d-flex flex-row mx-2 align-items-center">
                      <p style="font-size: 16px;font-weight: bold;flex: none">প্রথম ডোজ</p>
                      <p class="text-primary ml-2 cw-vs-fs cw-total-vaccinated-doze-first"> ৫৮,৬৬,৭৩৭</p>
                    </div>
                    <div class="d-flex flex-row mx-2 align-items-center">
                      <p style="font-size: 16px;font-weight: bold;flex: none">দ্বিতীয় ডোজ</p>
                      <p class="text-primary ml-2 cw-vs-fs cw-total-vaccinated-doze-second"> ৪২,৮৬,৩৬৫</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-4 -->
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-lg-9 col-md-8 national-items">
            <div class="category-header national-ch d-flex justify-content-between align-items-center national__home mt-2">
              <div class="heading national-heading">
                <p class="title"><a href="{{route ('single-post')}}" style="color: #000 !important;">জাতীয়</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="row border-right">
              <div class="col-lg-8 col-12">
                <div class="grid-fourth pt-2 m-pt-0">
                  <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__1 m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <h2>পুলিশ দেখে বর-কনের দৌড়, খাবার ফেলে পালালেন অতিথিরা</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__2 m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <h2>করোনার কারণে ইউপি নির্বাচন স্থগিত&nbsp;</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__3 m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <h2>শ্রমিক কল্যাণ তহবিলে লভ্যাংশ দিল বিএসআরএম-ইডটকো</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__4 m-py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                    </div>
                    <h2>৭ দিনের মধ্যে রাস্তা পরিষ্কার না করলে ব্যবস্থা</h2>
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                <div class="regular-list scaled">
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">সীমান্ত দিয়ে কিশোর গ্যাংয়ের হাতে অস্ত্র আসছে</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">গ্রেড-১ এ পদোন্নতি পেলেন আহসানুল জব্বার</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">ফায়ার সার্ভিসের বার্ষিক কর্মসম্পাদন চুক্তি সই</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">হলুদের কৌটায় রেখে ইয়াবা বেচতেন তিনি</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">সিনিয়র সচিব মোহসীন চৌধুরীর প্রথম মৃত্যুবার্ষিকী মঙ্গলবার</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">কান্নায় ভারী ঢামেকের পরিবেশ, ৪ জনের মরদেহ হস্তান্তর</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                    <div class="image-container d-flex d-lg-none">
                      <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    </div>
                    <h2 class="title">সেনাপ্রধানের সঙ্গে ভারতীয় বিমান বাহিনী প্রধানের সাক্ষাৎ</h2>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 politics">
            <div class="category-header politics-ch d-flex justify-content-between align-items-center politics__home mt-2">
              <div class="heading politics-heading">
                <p class="title"><a href="{{route ('single-post')}}" style="color: #000 !important;">রাজনীতি</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="regular-list scaled ai-custom">
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">বিস্ফোরণের দায়ভার প্রশাসন এড়াতে পারে না : খেলাফত</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2 ">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">সরকারি হাসপাতালগুলোতে বিএনপির স্মারকলিপি</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2 ">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">সংকটে আ.লীগ-জাপা একযোগে কাজ করবে</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2 ">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">‘ঘুষ ছাড়া সরকারি দফতরে কাজ হয় না’</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2 d-none d-sm-flex">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">বিএনপিই পলায়নপর রাজনীতিতে অভ্যস্ত</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- section-5 -->
      <div class="container-fluid px-5">
        <div class="row">
          <div class="col-lg-9 col-md-8">
            <div class="category-header country-ch d-flex justify-content-between align-items-center opinion__home mt-2">
              <div class="heading opinion-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="country-lc">সারাদেশ</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="row border-right country-articles">
              <div class="col-12 col-md-12 col-xl-4 mt-2">
                <div class="row type-sect-three-left">
                  <div class="col-6 col-md-6 col-lg-6 col-xl-12 box-news d-flex justify-content-sm-center">
                    <a href="{{route ('single-post')}}" class="news-item news-item-box pt-3 m-pb-2">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                      <h2 class="title">সালিসে কিশোরীকে বিয়ে, আলোচিত সেই চেয়ারম্যান বরখাস্ত</h2>
                    </a>
                  </div>
                  <div class="col-6 col-md-6 col-lg-6 col-xl-12 box-news d-flex justify-content-sm-center">
                    <a href="{{route ('single-post')}}" class="news-item news-item-box pt-3 m-pb-2">
                      <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lg-img lazyload img-loader">
                      <h2 class="title">সালিসে কিশোরীকে বিয়ে, আলোচিত সেই চেয়ারম্যান বরখাস্ত</h2>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="clk-list clk-center">
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ঢাকা বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ইয়োগায় দেশসেরা রাঙামাটির থুইমা মারমা</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">রংপুর বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ভুল চিকিৎসায় নবজাতকসহ প্রসূতির মৃত্যুর অভিযোগ</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ময়মনসিংহ বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4 d-none d-sm-flex">
                <div class="clk-list clk-right">
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ঢাকা বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 ">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ইয়োগায় দেশসেরা রাঙামাটির থুইমা মারমা</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">রংপুর বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ভুল চিকিৎসায় নবজাতকসহ প্রসূতির মৃত্যুর অভিযোগ</h2>
                  </a>
                  <a href="{{route ('single-post')}}" class="clk-item clk-item-regular py-2 d-none d-sm-flex">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                    <h2 class="title">ময়মনসিংহ বিভাগের ২৮ জুনের খবরাখবর</h2>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 custom-item">
            <div class="category-header bangladesh-ch d-flex justify-content-between align-items-center politics__home mt-2">
              <div class="heading custom-heading p-3">
                <p class="title bangladesh-lc">আপনার এলাকার খবর</p>
              </div>
            </div>
            <div class="row mt-2" style="margin: 0">
              <form action="">
                <div class="col-12" style="padding: 5px 0">
                  <div class="form-group" style="margin: 0">
                    <select class="form-select form-search-select" name="division" id="division">
                      <option value="">বিভাগ</option>
                      <option data-value="barishal" value="2">বরিশাল</option>
                      <option data-value="chattogram" value="3">চট্টগ্রাম</option>
                      <option data-value="dhaka" value="4">ঢাকা</option>
                      <option data-value="khulna" value="5">খুলনা</option>
                      <option data-value="rajshahi" value="6">রাজশাহী</option>
                      <option data-value="sylhet" value="7">সিলেট</option>
                      <option data-value="rangpur" value="8">রংপুর</option>
                      <option data-value="mymensingh" value="9">ময়মনসিংহ</option>
                    </select>
                  </div>
                </div>
                <div class="col-12" style="padding: 5px 0">
                  <div class="form-group" style="margin: 0">
                    <select class="form-select form-search-select" name="district" id="district">
                      <option data-value="" value="">জেলা</option>
                    </select>
                  </div>
                </div>
                <div class="col-12" style="padding: 5px 0">
                  <div class="form-group" style="margin: 0">
                    <select class="form-select form-search-select" name="upazila" id="upazila">
                      <option data-value="" value="">উপজেলা</option>
                    </select>
                  </div>
                </div>
                <div class="col-12 dis-search" style="padding: 5px 0">
                  <button type="submit" class="btn dis-sea btn-block text-white" aria-label="Search" disabled="">
                  খুঁজুন
                  <i class="fas fa-search" style="color: #FFF !important; height: 100%"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- section-6 -->
      <div class="bg-section-two sports-section-contents">
        <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
          <div class="row">
            <div class="col-lg-9 col-md-8">
              <div class="category-header sports-ch d-flex justify-content-between align-items-center">
                <div class="heading sports-heading">
                  <p class="title"><a href="{{route ('single-post')}}" class="sports-lc">খেলা</a></p>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item " role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ক্রিকেট</button>
                  </li>
                  <li class="nav-item " role="presentation">
                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ফুটবল</button>
                  </li>
                  <li class="nav-item " role="presentation">
                    <button class="nav-link " id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">সকল</button>
                  </li>
                </ul>
                <!-- </div> -->
                <a href="{{route ('single-post')}}" class="d-none d-sm-flex ">
                  <div class="read-more d-flex justify-content-end align-items-center">
                    <p>আরও খবর</p>
                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                  </div>
                </a>
              </div>
              <div>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__1 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>অমিতের জন্য শোক ক্রীড়ামন্ত্রীর, শোকার্ত ক্রীড়াঙ্গন</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__2 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>কঠোর বিধিনিষেধেও চলবে ফুটবল</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__3 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মেসি ইস্যুতে লাপোর্তা বললেন, ‘রিল্যাক্স’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__4 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মোহামেডান-বসুন্ধরা ম্যাচ ছাপিয়ে আলোচনায় কার্ড ও রেফারিং</h2>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">নীরবতা ভেঙে জবাব দিলেন আকরাম খান</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">হঠাৎ চলে গেলেন বাফুফের অমিত</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">কর্মকর্তাদের কারণে আম্পায়াররা গালি খায়, ‘আমি ভয় পাই না’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">মেসি যতক্ষণ মাঠে আছে, কোপা আমেরিকায় আর্জেন্টিনাই ফেবারিট</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">‘ফুটবল ঘরে ফিরছে’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">ফের টেস্ট র&zwj;্যাঙ্কিংয়ের শীর্ষে উইলিয়ামসন</h2>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__1 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>অমিতের জন্য শোক ক্রীড়ামন্ত্রীর, শোকার্ত ক্রীড়াঙ্গন</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__2 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>কঠোর বিধিনিষেধেও চলবে ফুটবল</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__3 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মেসি ইস্যুতে লাপোর্তা বললেন, ‘রিল্যাক্স’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__4 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মোহামেডান-বসুন্ধরা ম্যাচ ছাপিয়ে আলোচনায় কার্ড ও রেফারিং</h2>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">নীরবতা ভেঙে জবাব দিলেন আকরাম খান</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">হঠাৎ চলে গেলেন বাফুফের অমিত</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">কর্মকর্তাদের কারণে আম্পায়াররা গালি খায়, ‘আমি ভয় পাই না’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">মেসি যতক্ষণ মাঠে আছে, কোপা আমেরিকায় আর্জেন্টিনাই ফেবারিট</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">‘ফুটবল ঘরে ফিরছে’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">ফের টেস্ট র&zwj;্যাঙ্কিংয়ের শীর্ষে উইলিয়ামসন</h2>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row sports-all sports-item">
                      <div class="col-lg-8 col-12">
                        <div class="grid-fourth pt-2 m-pt-0">
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__1 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>অমিতের জন্য শোক ক্রীড়ামন্ত্রীর, শোকার্ত ক্রীড়াঙ্গন</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__2 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>কঠোর বিধিনিষেধেও চলবে ফুটবল</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__3 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মেসি ইস্যুতে লাপোর্তা বললেন, ‘রিল্যাক্স’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="grid-fourth-item grid-fourth-item__4 m-py-2">
                            <div class="image-container">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2>মোহামেডান-বসুন্ধরা ম্যাচ ছাপিয়ে আলোচনায় কার্ড ও রেফারিং</h2>
                          </a>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12 third-right d-none d-sm-flex">
                        <div class="regular-list scaled">
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">নীরবতা ভেঙে জবাব দিলেন আকরাম খান</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">হঠাৎ চলে গেলেন বাফুফের অমিত</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">কর্মকর্তাদের কারণে আম্পায়াররা গালি খায়, ‘আমি ভয় পাই না’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">মেসি যতক্ষণ মাঠে আছে, কোপা আমেরিকায় আর্জেন্টিনাই ফেবারিট</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">‘ফুটবল ঘরে ফিরছে’</h2>
                          </a>
                          <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                            <div class="image-container d-flex d-lg-none">
                              <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                            </div>
                            <h2 class="title">ফের টেস্ট র&zwj;্যাঙ্কিংয়ের শীর্ষে উইলিয়ামসন</h2>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row cricket sports-item" style="display: none">
                </div>
                <div class="row football sports-item" style="display: none">
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 m-mt-2">
              <div class="category-header education-ch d-flex justify-content-between align-items-center">
                <div class="heading custom-heading">
                  <p class="title"><a href="{{route ('single-post')}}" class="education-lc">শিক্ষা</a></p>
                </div>
                <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                  <div class="read-more d-flex justify-content-end align-items-center">
                    <p>আরও খবর</p>
                    <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                  </div>
                </a>
              </div>
              <div class="blk-list scaled pt-2">
                <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                  </div>
                  <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                </a>
                <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                  </div>
                  <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                </a>
                <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                  <div class="image-container">
                    <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                  </div>
                  <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- section-7 -->
      
      <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
        <div class="row">
          <div class="col-12">
            <div class="category-header sports-ch d-flex justify-content-between align-items-center">
              <div class="heading sports-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="sports-lc">বিনোদন</a></p>
              </div>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link active" id="bolwd-tab" data-bs-toggle="tab" data-bs-target="#bolwd" type="button" role="tab" aria-controls="bolwd" aria-selected="true">বলিউড</button>
                </li>
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link" id="holwd-tab" data-bs-toggle="tab" data-bs-target="#holwd" type="button" role="tab" aria-controls="holwd" aria-selected="false">হলিউড</button>
                </li>
                <li class="nav-item " role="presentation">
                  <button class="nav-link entertainment-link" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="false">সকল</button>
                </li>
              </ul>
              <!-- </div> -->
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex ">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bolwd" role="tabpanel" aria-labelledby="bolwd-tab">
                  <div class="row sports-all sports-item">
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__1">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" width="640" height="335" class="lazyload img-loader">
                          </div>
                          <h2>সন্তান জন্মের আগের দিনও শুটিং করেছেন তানিয়া</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>রোম্যান্সের নতুন সংজ্ঞা খুঁজে পেয়েছেন শ্রীলেখা!</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__3">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>বিধি-নিষেধের মধ্যে রাস্তায় শুটিং, মুক্তি মুচলেকায়</h2>
                        </a>
                      </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="holwd" role="tabpanel" aria-labelledby="holwd-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__1">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" width="640" height="335" class="lazyload img-loader">
                          </div>
                          <h2>সন্তান জন্মের আগের দিনও শুটিং করেছেন তানিয়া</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>রোম্যান্সের নতুন সংজ্ঞা খুঁজে পেয়েছেন শ্রীলেখা!</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__3">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>বিধি-নিষেধের মধ্যে রাস্তায় শুটিং, মুক্তি মুচলেকায়</h2>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
                  <div class="row sports-all sports-item">
                    
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-6 col-12 entertainment-left">
                      <div class="grid-entertainment pt-2">
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__1">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" width="640" height="335" class="lazyload img-loader">
                          </div>
                          <h2>সন্তান জন্মের আগের দিনও শুটিং করেছেন তানিয়া</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>রোম্যান্সের নতুন সংজ্ঞা খুঁজে পেয়েছেন শ্রীলেখা!</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="grid-entertainment-item grid-entertainment-item__3">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2>বিধি-নিষেধের মধ্যে রাস্তায় শুটিং, মুক্তি মুচলেকায়</h2>
                        </a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 m-mt-2">
                      
                      <div class="blk-list scaled pt-2">
                        <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">উন্মুক্ত বিশ্ববিদ্যালয়ের নতুন উপাচার্য হুমায়ুন আখতার</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৪৩তম বিসিএসের আবেদনের সময় বাড়ছে না</h2>
                        </a>
                        <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                          <div class="image-container">
                            <img src="{{ asset('assets/img/s.jpg')}}" width=130 height=90 alt="" class="lazyload img-loader">
                          </div>
                          <h2 class="title">৩৮তম বিসিএসে নন-ক্যাডারে নিয়োগ পেলেন আরও ১১৩৯ জন</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row cricket sports-item" style="display: none">
              </div>
              <div class="row football sports-item" style="display: none">
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <!-- section-8 -->
      <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="category-header lifestyle-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading lifestyle-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="lifestyle-lc">লাইফস্টাইল</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">প্রেশার কুকার কেনার আগে যেসব বিষয়ে খেয়াল রাখবেন</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">কোরবানির আগে যেসব প্রস্তুতি নেবেন</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">ছেলেরা ত্বকের সৌন্দর্যে যা করবেন</h2>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="category-header technology-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading custom-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="technology-lc">তথ্যপ্রযুক্তি</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">ভারতের নতুন আইন নিয়ে বিব্রত টুইটার!</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">এনসেলাডাস উপগ্রহে থাকতে পারে প্রাণীর অস্তিত্ব!</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">উইন্ডোজ ইলেভেন আপডেট হবে প্রতি বছর</h2>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="category-header religion-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading islam-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="religion-lc">ধর্ম</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">যেদিন রোজা রাখলে দুই বছরের গুনাহ মাফ হয়</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">জিলহজ মাসের ফজিলত</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">জিলহজ মাসে যেসব আমল করবেন</h2>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="category-header tourism-ch d-flex justify-content-between align-items-center mt-2">
              <div class="heading custom-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="tourism-lc">জবস</a></p>
              </div>
              <a href="{{route ('single-post')}}" class="d-none d-sm-flex">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও খবর</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="blk-list scaled mt-2">
              <a href="{{route ('single-post')}}" class="news-item-blk py-2 news-blk-image">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">একাধিক পদে লোক খুঁজছে ওয়ালটন হাই টেক</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">উখিয়ায় নিয়োগ দেবে আইসিআরসি</h2>
              </a>
              <a href="{{route ('single-post')}}" class="news-item news-item-regular py-2">
                <div class="image-container">
                  <img src="{{ asset('assets/img/s.jpg')}}" alt="" class="lazyload img-loader">
                </div>
                <h2 class="title">সুপার স্টার গ্রুপে চাকরির সুযোগ</h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- section-9 -->
      <div class="py-3 m-pt-0 mt-3 m-mt-2 d-lg-block d-md-none d-sm-none">
        <div class="container-fluid px-5 pt-3 m-pt-2 pb-3 m-pb-2">
          <div class="webstory-container">
            <div class="category-header story-ch d-flex justify-content-between align-items-center">
              <div class="heading opinion-heading">
                <p class="title"><a href="{{route ('single-post')}}" class="story-lc">ওয়েবস্টোরি</a></p>
              </div>
              <a href="{{route ('single-post')}}">
                <div class="read-more d-flex justify-content-end align-items-center">
                  <p>আরও ওয়েবস্টোরি</p>
                  <p><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></p>
                </div>
              </a>
            </div>
            <div class="web-stories py-2">
              <a class="story-item story-item-1" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-1" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-2" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-3" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-4" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-5" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
              <a class="story-item story-item-6" href="{{route ('single-post')}}" target="_blank">
                <img class="background-image img-loader img-loader-0" src="{{ asset('assets/img/s.jpg')}}" alt="" width="250" height="400">
                <div class="story-extra">
                  <p class="story-category">বিনোদন</p>
                  <h2>কমলা রঙে মোহময়ী মিম</h2>
                  <div class="story-page-indicator"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    
  


@endsection