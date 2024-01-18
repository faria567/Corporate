@extends('include_front.master')
@section('content')
@section('title','Service')

  <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <span>Our Top Services</span>
                            <h2>Our Best Services</h2>
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
@endsection