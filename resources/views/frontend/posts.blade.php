@extends('layouts.header')
@section('content')

 <!-- section-1 -->
      <div class="container-fluid mt-3 px-5">
        <div class="category-container">
          <div class="row">
            <div class="col-lg-9 col-md-8 mb-2">
              <section class="section-bb">
                <div class="cat-header py-2">
                  <h2><a href="{{route ('tag')}}">জাতীয়</a></h2>
                </div>
                <div class="subcategories d-flex align-items-center">
                  <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> করোনাভাইরাস</a>
                  <div class="identifier"></div> <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> রাজধানীর খবর</a>
                  <div class="identifier"></div> <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> আবহাওয়া</a>
                  <div class="identifier"></div> <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> জাতীয় সংসদ</a>
                  <div class="identifier"></div> <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> একুশে বইমেলা</a>
                  <div class="identifier"></div> <a href="{{route ('tag')}}" class="cat-item border rounded p-1"> চট্টগ্রামের খবর</a>
                </div>
              </section>
              <div class="cat-lead-container border-bottom my-2">
                <div class="row">
                  <div class="col-lg-8 top-left-section lead-top">
                    <div class="lead-news">
                      <a href="#" class="news-item news-item-lead border-0">
                        <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="জরুরি সেবার আওতাভুক্ত হলো এনআইডি" class="lazyload img-loader">
                        <h2 class="title" style="margin: 10px 0">জরুরি সেবার আওতাভুক্ত হলো এনআইডি</h2>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-4 cat-two-items">
                    <div class="row">
                      <div class="col-12 col-sm-6 col-lg-12 box-news">
                        <a href="#" class="news-item news-item-box m-py-2 border-bottom">
                          <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="যৌথ টিকা উৎপাদনে রাজি চীন-রাশিয়া, তবে প্রযুক্তি দিতে রাজি না" class="lazyload img-loader">
                          <h2 class="title">যৌথ টিকা উৎপাদনে রাজি চীন-রাশিয়া, তবে প্রযুক্তি দিতে রাজি না</h2>
                        </a>
                      </div>
                      <div class="col-12 col-sm-6 col-lg-12 box-news pt-2">
                        <a href="#" class="news-item news-item-box m-py-2">
                          <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="হাতিয়ায় গৃহহীনদের মাঝে নৌবাহিনীর ৮০টি ব্যারাক হাউজ হস্তান্তর" class="lazyload img-loader">
                          <h2 class="title">হাতিয়ায় গৃহহীনদের মাঝে নৌবাহিনীর ৮০টি ব্যারাক হাউজ হস্তান্তর</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row more-contents">
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="সহকারী রিটার্নিং অফিসার নিয়োগের সংশোধিত প্রজ্ঞাপন জারি" class="lazyload img-loader">
                    <h2 class="title">সহকারী রিটার্নিং অফিসার নিয়োগের সংশোধিত প্রজ্ঞাপন জারি</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="সীমান্ত বন্ধের মেয়াদ বাড়ল আরও ১৭ দিন" class="lazyload img-loader">
                    <h2 class="title">সীমান্ত বন্ধের মেয়াদ বাড়ল আরও ১৭ দিন</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="এলএনজি সরবরাহে মালয়েশিয়ার সঙ্গে চুক্তি" class="lazyload img-loader">
                    <h2 class="title">এলএনজি সরবরাহে মালয়েশিয়ার সঙ্গে চুক্তি</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="বিধিনিষেধ লঙ্ঘনে গ্রেফতার ৫৫২, জরিমানা ১৭ লাখ" class="lazyload img-loader">
                    <h2 class="title">বিধিনিষেধ লঙ্ঘনে গ্রেফতার ৫৫২, জরিমানা ১৭ লাখ</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="ডিএনসিসির অভিযানে আড়াই লাখ টাকা জরিমানা" class="lazyload img-loader">
                    <h2 class="title">ডিএনসিসির অভিযানে আড়াই লাখ টাকা জরিমানা</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="শর্ত সাপেক্ষে ঈদগাহে নামাজ পড়া যাবে" class="lazyload img-loader">
                    <h2 class="title">শর্ত সাপেক্ষে ঈদগাহে নামাজ পড়া যাবে</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="মাস্ক পরিধান না করা অপরাধের শামিল" class="lazyload img-loader">
                    <h2 class="title">মাস্ক পরিধান না করা অপরাধের শামিল</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="নারায়ণগঞ্জে দেয়াল চাপায় ২ শ্রমিক নিহত" class="lazyload img-loader">
                    <h2 class="title">নারায়ণগঞ্জে দেয়াল চাপায় ২ শ্রমিক নিহত</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="করোনায় আরও ২০৩ জনের মৃত্যু" class="lazyload img-loader">
                    <h2 class="title">করোনায় আরও ২০৩ জনের মৃত্যু</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="যাত্রীবাহী নৌযান চলাচল শুরু বৃহস্পতিবার থেকে" class="lazyload img-loader">
                    <h2 class="title">যাত্রীবাহী নৌযান চলাচল শুরু বৃহস্পতিবার থেকে</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="রূপগঞ্জে অগ্নিকাণ্ডের দায় আমলাদের : জাফরুল্লাহ" class="lazyload img-loader">
                    <h2 class="title">রূপগঞ্জে অগ্নিকাণ্ডের দায় আমলাদের : জাফরুল্লাহ</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="গুলশানে বিয়ার-প্রাইভেটকারসহ মাদক কারবারি গ্রেফতার" class="lazyload img-loader">
                    <h2 class="title">গুলশানে বিয়ার-প্রাইভেটকারসহ মাদক কারবারি গ্রেফতার</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="তলিয়ে থাকা জাহাজে ধাক্কা লেগে ডুবল পণ্যবাহী জাহাজ" class="lazyload img-loader">
                    <h2 class="title">তলিয়ে থাকা জাহাজে ধাক্কা লেগে ডুবল পণ্যবাহী জাহাজ</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="মাস্ক ছাড়া ট্রেনে উঠতে দেওয়া হবে না" class="lazyload img-loader">
                    <h2 class="title">মাস্ক ছাড়া ট্রেনে উঠতে দেওয়া হবে না</h2>
                  </a>
                </div>
                <div class="col-sm-4 box-news">
                  <a href="#" class="news-item news-item-box m-py-2">
                    <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="শিগগিরই বাংলাদেশকে অ্যাস্ট্রাজেনেকার ২৯ লাখ টিকা দিচ্ছে জাপান" class="lazyload img-loader">
                    <h2 class="title">শিগগিরই বাংলাদেশকে অ্যাস্ট্রাজেনেকার ২৯ লাখ টিকা দিচ্ছে জাপান</h2>
                  </a>
                </div>
              </div>
              <div class="w-100 text-center py-2">
                <button type="button" class="btn  px-4 load-more text-white">আরও দেখুন
                </button>
                <div class="next-loader" style="display: none;">
                  <div class="d-flex justify-content-center">
                    <div class="sk-chase">
                      <div class="sk-chase-dot"></div>
                      <div class="sk-chase-dot"></div>
                      <div class="sk-chase-dot"></div>
                      <div class="sk-chase-dot"></div>
                      <div class="sk-chase-dot"></div>
                      <div class="sk-chase-dot"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4">
              <div class="advertisement d-flex justify-content-center">
                <div id="div-gpt-ad-1624960273857-0">
                </div>
              </div>
              <div class="category-right-section-top">
                <div class="category-header d-flex justify-content-between align-items-center mt-2">
                  <div class="heading national-heading py-2">
                    <p class="title">এই সপ্তাহের পাঠকপ্রিয়</p>
                  </div>
                </div>
                <div class="blk-list scaled">
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="আর্জেন্টিনার ফাঁদে পা দিয়েছে ব্রাজিল" class="lazyload img-loader">
                      <i class="fa fa-play-circle video-icon"></i>
                    </div>
                    <h2 class="title">আর্জেন্টিনার ফাঁদে পা দিয়েছে ব্রাজিল</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="বদলে যাচ্ছে জাতীয় বিশ্ববিদ্যালয়ের কারিকুলাম" class="lazyload img-loader">
                    </div>
                    <h2 class="title">বদলে যাচ্ছে জাতীয় বিশ্ববিদ্যালয়ের কারিকুলাম</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="শত অভিযোগের পরও ইভ্যালিতে একদিনে ২০০ কোটি টাকার অর্ডার" class="lazyload img-loader">
                    </div>
                    <h2 class="title">শত অভিযোগের পরও ইভ্যালিতে একদিনে ২০০ কোটি টাকার অর্ডার</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="আমার এবং ভক্তদের ভালোলাগা জয়ের মাধ্যমে প্রকাশ করেছি: অপু" class="lazyload img-loader">
                    </div>
                    <h2 class="title">আমার এবং ভক্তদের ভালোলাগা জয়ের মাধ্যমে প্রকাশ করেছি: অপু</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="টিকার তথ্য দিতে জাতীয় বিশ্ববিদ্যালয়ের জরুরি নির্দেশনা" class="lazyload img-loader">
                    </div>
                    <h2 class="title">টিকার তথ্য দিতে জাতীয় বিশ্ববিদ্যালয়ের জরুরি নির্দেশনা</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="বাংলাদেশ ডাক বিভাগে ২৬৯ নিয়োগ, আবেদন করুন ঘরে বসেই" class="lazyload img-loader">
                    </div>
                    <h2 class="title">বাংলাদেশ ডাক বিভাগে ২৬৯ নিয়োগ, আবেদন করুন ঘরে বসেই</h2>
                  </a>
                  <a href="#" class="news-item news-item-regular py-2">
                    <div class="image-container">
                      <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="মেসিকে চ্যালেঞ্জ জানাচ্ছেন তারই সতীর্থ মার্টিনেজ" class="lazyload img-loader">
                    </div>
                    <h2 class="title">মেসিকে চ্যালেঞ্জ জানাচ্ছেন তারই সতীর্থ মার্টিনেজ</h2>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection