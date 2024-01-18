@extends('include.master')
@section('content')
@section('title','Blog')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add new Blog</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                {{-- <p class="text-center text-success">{{Session::get('message')}}</p> --}}
                <div class="card-body">
                  
                        <form class="form-valide" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
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
                                    <input class="form-control" type="text" name="title" value="{{old('title')}}" id="example-text-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                  
                                    <input class="form-control" type="file" name="image" id="example-text-input">
                                    

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input class="form-control" type="file" name="video" id="example-text-input">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea name="content" class="form-control" id="content" value="{{old('content')}}"  rows="4"></textarea>
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
