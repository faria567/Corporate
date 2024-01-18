@extends('include_front.master')
@section('content')
@section('title','Case Study')
 <!--? Hero Start -->
 <div class="slider-area2">
    <div class="slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>Case Study</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!--? Services Ara Start -->
<div class="services-area section-padding3">
    <div class="container">
        <div class="row">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle mb-70">
                    <span>Our Portfolios of cases</span>
                    <h2>Featured Case Study</h2>
                </div> 
            </div>
        </div>
        @foreach($casestudy as $item)
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10">
                <div class="single-services mb-100">
                    <div class="services-img">
                        <img  src="{{ asset('uploads/'.$item->image)}}" alt="">
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
@endsection