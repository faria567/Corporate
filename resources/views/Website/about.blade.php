@extends('include_front.master')
@section('content')
@section('title','About')
@foreach($content as $content)
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>Our Mission</h4>
                        <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                         </p>
                         <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                    </div>

                    <div class="about-details-cap mb-50">
                        <h4>Our Vision</h4>
                        <p>Consectetur adipiscing elit, sued do eiusmod tempor ididunt udfgt labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.
                         </p>
                         <p> Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    @foreach ($content as $content)
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
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- About Area End-->
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
                <!-- single Tem -->
                @foreach($members as $team)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img  src="{{ asset('uploads/'.$team->image)}}" alt="">
                            
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
                                    <p>{{$content->client_review ?? ''}} </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{ asset('uploads/'.$content->client_image)}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>{{$content->client_name ?? ''}}</span>
                                        <p>{{$content->client_designation ?? ''}}</p>
                                    </div>
                                </div>
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
                                        <img src="{{ asset('uploads/'.$content->client_image)}}" alt="">
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
    <!-- Brand Area Start -->
    <div class="brand-area pt-150 pb-140">
        <div class="container">
            <div class="brand-active brand-border pb-40">
                <div class="single-brand">
                    <img src="{{ asset('uploads/'.$content->sponsor_image)}}" alt="">
                </div>
               
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
    @endforeach
@endsection