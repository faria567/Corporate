@extends('include.master')
@section('content')
@section('title','Blog')


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Blog Edit</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="card-body">
                    <form method="PATCH" action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id">Category ID</label>
                                    <input type="text" name="category_id" class="form-control" id="category_id">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{old('title',$blog->title)}}" id="title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           

                            <div class="form-group">
                                <div class="form-control my-3">
                                    <img src="{{asset('uploads/'.$blog->image)}}" alt="" width="500px">
                                </div>
            
                                <label for="example-text-input" class="col-form-label"> Image</label>
                                <input class="form-control" type="file" name="image" id="example-text-input">
                                
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input type="text" name="video" class="form-control" id="video">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" id="content" value="{{old('content',$blog->content)}}"  rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

@endsection
