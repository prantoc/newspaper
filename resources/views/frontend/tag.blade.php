@extends('layouts.header')
@section('content')
      <!-- section-1 -->
      <section class="tag-page-area pt-3">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <ol class="d-flex" style="padding: 0; margin-bottom: 8px;">
                <li class="breadcrumb-item">
                  <a href="/">প্রচ্ছদ</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a href="#">লকডাউন</a>
              </li>
            </ol>
          </div>
          <div class="col-lg-8">
            <div class="topic-title w-100">
              <i class="fa fa-tag"></i>
              <h1>লকডাউন</h1>
            </div>
            <div class="topic-text topic-links w-100">
              <div class="topic-text-con" id="topic-text-con">
                <p>করোনাভাইরাসের সংক্রমণ রোধে আগামী সোমবার (২৮ জুন) থেকে পরবর্তী সাত দিন সারাদেশে কঠোর লকডাউন জারি থাকবে। পড়ুন লকডাউন সম্পর্কিত সর্বশেষ খবর।&nbsp;</p>
              </div>
            </div>
            <div class="my-2 mb-0 share-top d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
              <div class="mb-0 d-flex align-items-center">
                <div class="mb-0 d-flex flex-column text-align-center border-right pr-2 share-counter share-counter-pg0">
                  <iframe src="https://www.facebook.com/plugins/share_button.php?href=https://www.mybdhost.com/&amp;layout=button_count&amp;size=large&amp;appId=3102640556528237&amp;width=112&amp;height=28" title="Facebook Share" width="112" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons" style="pointer-events: auto;">
                  <a class="pl-2">
                    <div class="mb-0 social-icon share-social-icon twitter"><i class="fab fa-twitter"></i></div>
                  </a>
                  <a class="pl-2">
                    <div class="mb-0 social-icon share-social-icon whatsapp"><i class="fab fa-whatsapp"></i></div>
                  </a>
                  <a class="pl-2">
                    <div class="mb-0 social-icon copy share-social-icon"><i class="fa fa-clone" aria-hidden="true"></i></div>
                  </a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <nav>
              <div class="nav nav-tabs topic-tab" id="nav-tab" role="tablist">
                <button class="nav-link active topic-tab-btn" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">সর্বশেষ
                খবর</button>
                <button class="nav-link topic-tab-btn" id="nav-selected-tab" data-bs-toggle="tab" data-bs-target="#nav-selected" type="button" role="tab" aria-controls="nav-selected" aria-selected="false">নির্বাচিত
                খবর</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                <div class="article-box pt-3 more-contents">
                  <div class="topic-content topic-border-bottom pb-3 mb-3">
                    <div class="topic-content-text">
                      <a href="#">
                        সীমান্ত বন্ধের মেয়াদ বাড়ল আরও ১৭ দিন
                      </a>
                      <time datetime="2021-07-13 19:34:34">১৩ জুলাই ২০২১, ০৭:৩৪ পিএম</time>
                      <p class="d-none d-sm-block">করোনাভাইরাস পরিস্থিতি বিবেচনায় ভারতের সঙ্গে স্থলসীমান্ত বন্ধের মেয়াদ আরও ১৭দিন বাড়ানো হয়েছে। ফলে আগামী ৩১ জুলাই পর্যন্ত ভারতের সঙ্গে স্থলসীমান্ত বন্ধ থাকবে।</p>
                    </div>
                    <div class="topic-content-img">
                      <a href="#">
                        <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="সীমান্ত বন্ধের মেয়াদ বাড়ল আরও ১৭ দিন" class="lazyload img-loader">
                      </a>
                    </div>
                  </div>
                  <div class="topic-content topic-border-bottom pb-3 mb-3">
                    <div class="topic-content-text">
                      <a href="#">
                        বিধিনিষেধ শিথিলের সিদ্ধান্ত ‘অবান্তর’, রেকর্ড ছাড়াবে সংক্রমণ
                      </a>
                      <time datetime="2021-07-13 19:08:35">১৩ জুলাই ২০২১, ০৭:০৮ পিএম</time>
                      <p class="d-none d-sm-block">দেশে করোনাভাইরাসের সংক্রমণ হু হু করে বাড়ছে। প্রতিদিনই হচ্ছে মৃত্যু ও শনাক্তের রেকর্ড...</p>
                    </div>
                    <div class="topic-content-img">
                      <a href="#">
                        <img src="{{ asset('assets/img/placeholder.jpg')}}" alt="বিধিনিষেধ শিথিলের সিদ্ধান্ত ‘অবান্তর’, রেকর্ড ছাড়াবে সংক্রমণ" class="lazyload img-loader">
                      </a>
                    </div>
                  </div>
                  <div class="w-100 text-center py-2">
                    <button type="button" class="btn px-4 load-more text-white">আরও দেখুন
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
              </div>
              <div class="tab-pane fade" id="nav-selected" role="tabpanel" aria-labelledby="nav-selected-tab">
                <div class="article-box pt-3">
                  <div class="text-center w-100">
                    <h4>কোন খবর পাওয়া যায়নি</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection