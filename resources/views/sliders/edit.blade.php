@extends('include.master')
@section('content')
@section('title','Product')


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add new Team Member</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="card-body">
                    <form method="POST" action="{{ route('slider.update', $slider->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                          <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="name" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image" >
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="logo" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$slider->des}}">
                            </div>

         
                        </div>

                        <div class="row">

                            <div class=" col-md-6 mb-3">
                                <label for="icon" class="form-label">Description</label>
                                <input type="text" class="form-control" id="des" name="des" value="{{$slider->des}}">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
