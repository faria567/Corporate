@extends('include_front.master')
@section('content')
@section('title','Career')

  <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Career</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <div class="container">
          <div class="row mb-4">
            @foreach($career as $career)
            <div class="col-lg-3 col-md-4 mb-4">
            <div class="card border-0 shadow">
              <img src="{{$career->image ? asset('uploads/'.$career->image) : asset('images/jobs/default-job-logo.jpg')}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h4>{{$career->title}}</h4>
                <p>{{$career->description}}</p>
                <div class="text-center mt-2">
                  <a href="{{route('website.show',$career->id)}}">
                <button class="btn btn-sm btn-success btn-block">Details</button>
                  </a>
                </div>
              </div>
            </div>
            </div>
            @endforeach
          </div>
        </div>
@endsection