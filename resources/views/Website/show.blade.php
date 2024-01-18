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




 <div class="mt-4" style="margin: 0px -1px" >
            <div
              class="bg-white"
              style="
                background: #f7f7f7;
                margin-bottom: 15px;
                border: 1px solid lightgray;
                padding: 20px;
                border-radius: 10px;
              "
            >
             

              <div
                class="row jobs-details rounded bg-white d-flex align-items-center justify-content-between"
                style="max-width: 100%"
              >
           
                <div class="col-12 col-sm-6">          
                  <div class="jobs-details-info">          
                    <h3 class="text-light" style="font-weight:300">{{ $career->title }}</h3>
                   
                    <p><i class="fa-solid fa-folder-open me-2"></i>
                      <strong>Description:</strong
                      ><span><a href="#">{{ $career->description }}</a></span>
                    </p>
                    
                    <p><i class="fa-solid fa-money-bill me-2"></i><strong>Salary:</strong> {{ $career->salary_range  }}</p>
                    
                    <p><i class="fa-solid fa-clock me-2"></i><strong>Deadline:</strong>{{ \Carbon\Carbon::parse($career->application_deadline )->format('F j, Y') }}</p>
                  </div>
                </div>

                <div class="col-12 col-sm-6">
                  <div
                    class="jobs-details-img"
                    style="max-width: 350px; max-height: 250px"
                  >
                    <img
                      src="{{$career->image ?  asset('uploads/'.$career->image) : asset('images/jobs/default-job-logo.jpg')}}"
                      alt=""
                      class="w-100 h-100 rounded-2"
                    />
                  </div>
                </div>
              </div>
             

             
            </div>
          </div>

        </div>
         
        @endsection
        
