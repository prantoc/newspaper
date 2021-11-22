@extends('layouts.header')
@section('content')
      <!-- section-1 -->
      <div class="pt-2 pb-2 details">
        <div class="container">
          <div class="news-items">
            <div class="news-item-0 news-page mt-2">
              <div class="row">
                <div class="col-lg-12  d-print">
                  <article class="details-body" lg-uid="lg0">
                    <div class="row mb-3">
                      <div class="col-lg-8">
                        <ol class="d-flex" style="padding: 0; margin-bottom: 8px;">
                          <li class="breadcrumb-item">
                            <a href="{{route('home')}}">প্রচ্ছদ</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="

                          @foreach($menus as $menu_item) 
                            {{ $menu_item->link()}}
                          @endforeach
                            ">{{$cat->name}}</a>
                        </li>
                      </ol>
                      <h1 class="news-title">{{$singlePost->title}}</h1>
                      <div class="d-flex align-items-center my-2 py-2">
                        <div style="width: 38px;height: 38px;border-radius: 19px;">
                          <img class="author-image" style="width: 100%; margin: -7px -23px 47px -8px;" src=" {{ Voyager::image($singlePost->authorId->avatar) }}" alt="Dhaka Post Desk">
                        </div>
                        <div class="d-flex justify-content-start flex-column ml-2">
                          <div class="d-flex align-items-center author-reporting-area">
                            <div class="d-flex align-items-center">
                              <p class="author" style="margin-bottom: 5px;">

                              {{$singlePost->authorId->name}}
                            </p>
                            </div>
                          </div>
                          <p class="news-time" style="color: rgba(0,0,0,.7);">


                    @php
                        $englishDate =date('j F Y, h:i a',strtotime($singlePost->created_at));

                        $search_array= array('1','2','3','4','5','6','7','8','9','0','January','February','March','April','May','June','July','August','September','October','November','December','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','am', 'pm');

                        $replace_array= array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার', 'এএম', 'পিএম' );

                        // convert all bangle char to English char 
                        $en_number = str_replace($search_array, $replace_array, $englishDate);   

                        // remove unwanted char       
                        $end_date =  preg_replace('/[^A-Za-z0-9:\-]/', ' ', $en_number);
                    @endphp
                          {{$en_number}}
                        </p>
                        </div>
                      </div>
                      <div class="mb-0 share-top mt-2 d-flex align-items-center d-print-none justify-content-between" style="overflow: auto">
                        <div class="mb-0 d-flex align-items-center">
                      
                          <div class="mb-0 py-3 d-flex align-items-center justify-content-center social_list social_list_0 social-media-icons social-links" style="pointer-events: auto;">

                            @foreach($socialshare as $key=> $value)
                            <a href="{{$value}}" class="pl-2 social-button" target="_blank">
                              <div class="mb-0 social-icon share-social-icon twitter">
                                @if($key == 'facebook')
                                <i class="fab fa-facebook-f"></i>
                                @elseif($key == 'twitter')
                                <i class="fab fa-twitter"></i>
                                @else
                                <i class="fab fa-whatsapp"></i>
                                @endif
                              </div>
                            </a>
                            @endforeach
                          </div>
                        </div>
                        <div class="mb-0 d-flex align-items-center fs-mapper fs-mapper-0" style="pointer-events: auto;">
                          {{-- <button type="button" class="btn  social-icon share-social-icon fsi fsi-0">
                          ফ+
                          </button>
                          <button type="button" class="btn  social-icon share-social-icon fsd fsd-0">
                          ফ-
                          </button> --}}
                        </div>
                      </div>
                      <hr class="fix-padding-0">
                    </div>
                    <div class="col-lg-4 d-lg-flex justify-content-end fix-order-1 d-none">
                      <div id="div-gpt-ad-1620297441942-0" style="max-width: 100%; width: 300px; height: 250px;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                      <div class="news-image">
                        {{-- @if($singlePost->image) --}}
                        <img src="{{ Voyager::image( $singlePost->image ) }}" alt="{{$singlePost->title}}" class="lg-image">
                        {{-- @else
                        <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="lg-image"></img>
                        @endif --}}
                      </div>
                      <div class="news-details">
                        <p>
                          {!! $singlePost->body !!}
                        </p>
                      </div>
                      <div class="tags d-flex align-items-center flex-wrap d-print-none">
                        <div class="view-more-round" style="margin: 5px;"><a style="color: #000;" href="{{route ('tag', $singlePost->category->slug)}}">{{$singlePost->category->name}}</a>
                      </div>
                </div>
                
              </div>
            </div>
          </article>
        </div>
       {{--  <div class="row d-print-none m-mx-2 mt-4">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                  <!-- Section Title -->
                  <div class="section-heading">
                    <h5>COMMENTS</h5>
                  </div>
                  <ol>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                      <!-- Comment Content -->
                      <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                          <img src="{{ asset('assets/img/53.jpg')}}" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                          <a href="#" class="comment-date">27 Aug 2019</a>
                          <h6>Tomas Mandy</h6>
                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                          <div class="d-flex align-items-center">
                            <a href="#" class="like">like</a>
                            <a href="#" class="reply">Reply</a>
                          </div>
                        </div>
                      </div>
                      <ol class="children">
                        <li class="single_comment_area">
                          <!-- Comment Content -->
                          <div class="comment-content d-flex">
                            <!-- Comment Author -->
                            <div class="comment-author">
                              <img src="{{ asset('assets/img/53.jpg')}}" alt="author">
                            </div>
                            <!-- Comment Meta -->
                            <div class="comment-meta">
                              <a href="#" class="comment-date">27 Aug 2019</a>
                              <h6>Britney Millner</h6>
                              <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                              <div class="d-flex align-items-center">
                                <a href="#" class="like">like</a>
                                <a href="#" class="reply">Reply</a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ol>
                    </li>
                    <!-- Single Comment Area -->
                    <li class="single_comment_area">
                      <!-- Comment Content -->
                      <div class="comment-content d-flex">
                        <!-- Comment Author -->
                        <div class="comment-author">
                          <img src="{{ asset('assets/img/53.jpg')}}" alt="author">
                        </div>
                        <!-- Comment Meta -->
                        <div class="comment-meta">
                          <a href="#" class="comment-date">27 Aug 2019</a>
                          <h6>Simon Downey</h6>
                          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                          <div class="d-flex align-items-center">
                            <a href="#" class="like">like</a>
                            <a href="#" class="reply">Reply</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ol>
                </div>
                <div class="contact-form-area">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-12 mt-3">
                        <textarea name="message" class="form-control" id="message" cols="10" rows="5" placeholder="Message*" required=""></textarea>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary mt-30" type="submit">Submit Comment</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="py-3 m-py-2">
                  <div class="category-header d-flex justify-content-between align-items-center mt-2 py-3">
                    <div class="heading recent-heading">
                      <p class="title">সম্পর্কিত</p>
                    </div>
                  </div>
                  <div class="more-items pt-2">
                    <div class="row d-flex justify-content-center">
                      <div class="col-sm-4 box-news">
                        <a href="#" class="news-item news-item-box">
                          <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="দেশত্যাগের নিষেধাজ্ঞার বিষয়টি ‘পজিটিভলি দেখছি’ : ইভ্যালির রাসেল" class="img-loader">
                          <h2 class="title">দেশত্যাগের নিষেধাজ্ঞার বিষয়টি ‘পজিটিভলি দেখছি’ : ইভ্যালির রাসেল</h2>
                        </a>
                      </div>
                      <div class="col-sm-4 box-news">
                        <a href="#" class="news-item news-item-box">
                          <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="শত অভিযোগের পরও ইভ্যালিতে একদিনে ২০০ কোটি টাকার অর্ডার" class="img-loader">
                          <h2 class="title">শত অভিযোগের পরও ইভ্যালিতে একদিনে ২০০ কোটি টাকার অর্ডার</h2>
                        </a>
                      </div>
                      <div class="col-sm-4 box-news">
                        <a href="#" class="news-item news-item-box">
                          <img src="{{ asset('assets/img/placeholder.jpg')}}" data-src="#" alt="পণ্য না পেলে টাকা ‘নয়’, ই-কমার্সের পেমেন্ট নির্দেশনা জারি&nbsp;" class="img-loader">
                          <h2 class="title">পণ্য না পেলে টাকা ‘নয়’, ই-কমার্সের পেমেন্ট নির্দেশনা জারি&nbsp;</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="row d-print-none m-mx-2">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="py-3 m-py-2">
                  <div class="category-header d-flex justify-content-between align-items-center mt-2">
                    <div class="heading recent-heading py-3">
                      <p class="title">আরও পড়ুন</p>
                    </div>
                  </div>
                  <div class="more-items pt-2">
                    <div class="row d-flex justify-content-center">
                      @foreach($morePosts as $fbp)
                      <div class="col-sm-4 box-news">
                        <a href="{{route('single-post', $fbp->slug)}}" class="news-item news-item-box">
                          @if($fbp->image )
                          <img src="{{ Voyager::image( $fbp->image ) }}" data-src="#" alt="{{$fbp->title}}" class="img-loader" height="175">
                          @else
                          <img src="{{ Voyager::image( Voyager::setting('site.logo')) }}" class="img-loader" height="175"></img>
                          @endif
                          <h2 class="title">{{$fbp->title}}</h2>
                        </a>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="next-loader" style="display: none">
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
  <div class="mobile-bottom-contents"></div>
</div>
</div>

@endsection