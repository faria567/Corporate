@extends('include_front.master')
@section('content')
@section('title','Index')

    <!-- slider Area Start-->
    @foreach($content as $content)
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        @foreach($content as $content)
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">{{$content->slider_short_title}}</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >{{$content->slider_title}}</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s"> {{$content->slider_short_description}}</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">{{$content->slider_button_text}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        {{-- <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Committed to success</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >We help to grow your business</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Mollit anim laborum.Dvcuis aute serunt  iruxvfg dhjkolohr indd re voluptate<br> velit esscillumlore eu quife nrulla parihatur.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">Our Services</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
           
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Title -->
                    
                    <div class="section-tittle mb-70">
                        <span>{{$content->service_short_title ?? ''}}</span>
                        <h2>{{$content->service_title ?? ''}}</h2>
                    </div>
                   
                </div>
            </div>
            
            <div class="row">
                @foreach($service as $item)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-development"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">{{$item->title}} </a></h5>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
               
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Area Start-->
    <div class="support-company-area pt-100 pb-100 section-bg fix" data-background="asset_front/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="asset_front/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <span>{{$content->service_short_title ?? ''}}</span>
                            <h2>{{$content->service_title ?? ''}}</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">{{$content->service_description ?? ''}}</p>
                          
                            <a href="about.html" class="btn post-btn">{{$content->service_button_text ?? ''}}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Area End-->
    <!--? Services Ara Start -->
    <div class="services-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>{{$content->portfolio_short_title ?? ''}}</span>
                        <h2>{{$content->portfolio_title ?? ''}}</h2>
                    </div> 
                </div>
            </div>
            @foreach($casestudy as $item)
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="single-services mb-100">
                    <div class="services-img">
                        <img src="{{ asset('uploads/'.$item->image)}}" alt="">

                        {{-- <img src="../asset_front/img/gallery/services1.png" alt=""> --}}
                        </div>
                        <div class="services-caption">
                        <span>{{$item->title}}</span>
                        <p><a href="#">{{$item->description}}</a></p>
                    </div>
                </div>
            </div>
           
        </div>
        @endforeach
        </div>
    </div>
    <!-- Services Ara End -->
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="asset_front/img/gallery/section_bg04.jpg">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>  </p>
                                </div>
                                <!-- founder -->
                                {{-- <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="asset_front/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>{{$content->client_review ?? ''}} </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="asset_front/img/gallery/Homepage_testi.png" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>{{$content->client_name ?? ''}}</span>
                                        <p>{{$content->client_designation ?? ''}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Coun Down Start -->
    <div class="count-down-area pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">{{$content->project_complete ?? ''}}</span>
                        <p>Projects Completed</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter active text-center">
                        <span class="counter">{{$content->active_client ?? ''}}</span>
                        <p> Active Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">{{$content->cup_of_coffee ?? ''}}</span>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter">{{$content->happy_client ?? ''}}</span>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Coun Down End -->
    <!-- Team Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>{{$content->team_title ?? ''}} </span>
                        <h2>{{$content->team_short_title ?? ''}}</h2>
                    </div> 
                </div>
            </div>
            <div class="row">
                @foreach($members as $team)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img  src="{{ asset('uploads/'.$item->image)}}" alt="">

                            {{-- <img src="asset_front/img/gallery/team2.png" alt=""> --}}
                        </div>
                        <div class="team-caption">
                            <h3><a href="#">{{$team->name}}</a></h3>
                            <span>{{$team->position ?? ''}}</span>
                        </div>
                    </div>
                </div>
               @endforeach

               
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Want To work -->
    <section class="wantToWork-area w-padding2 section-bg" data-background="asset_front/img/gallery/section_bg03.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-9 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>{{$content->display_title ?? ''}}</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <a href="#" class="btn btn-black f-right">{{$content->display_button_text ?? ''}}</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-100">
                        <span>{{$content->blog_short_title ?? ''}}</span>
                        <h2>{{$content->blog_title ?? ''}}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogfront as $blog)
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                {{-- <img src="asset_front/img/gallery/home_blog1.png" alt=""> --}}
                               
                                <img  src="{{ asset('uploads/'.$blog->image)}}" alt="">
                                <ul>
                                    <li>By Admin {{$blog->user->name ?? ''}}  -  {{ $blog->created_at->format('d, F  ') }}</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="blog_details.html">{{$blog->title}}</a></h3>
                                <p>{{$blog->content}}</p>
                                <a href="blog_details.html" class="more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
    <!-- Brand Area Start -->
    <div class="brand-area pb-140">
        <div class="container">
            <div class="brand-active brand-border pb-40">

                <div class="single-brand">
                    <img src="{{ asset('uploads/'.$content->sponsor_image)}}" alt="">
                </div>
                {{-- <div class="single-brand">
                    <img src="asset_front/img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="asset_front/img/gallery/brand3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="asset_front/img/gallery/brand4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="asset_front/img/gallery/brand2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="asset_front/img/gallery/brand5.png" alt="">
                </div> --}}
            </div>
        </div>
    </div>

    @endforeach
    <!-- Brand Area End -->
@endsection