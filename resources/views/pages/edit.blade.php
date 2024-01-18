@extends('include.master')
@section('content')
@section('title','Product')


    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('page.update', $page->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"  value="{{$page->title}}" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="{{$page->description}}" required>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="content_title1" class="form-label">Content Title 1</label>
            <input type="text" class="form-control" id="content_title1" name="content_title1" placeholder="Enter content title" value="{{$page->content_title1}}" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_image1" class="form-label">Content Image 1</label>
                    <input type="file" class="form-control" id="content_image1" name="content_image1" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_des1" class="form-label">Content Description 1</label>
                    <textarea class="form-control" id="content_des1" name="content_des1" rows="4" placeholder="Enter content description"  required>{{$page->content_des1}}</textarea>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="content_title2" class="form-label">Content Title 2</label>
            <input type="text" class="form-control" id="content_title2" name="content_title2" placeholder="Enter content title" value="{{$page->content_title2}}" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_image2" class="form-label">Content Image 2</label>
                    <input type="file" class="form-control" id="content_image2" name="content_image2"  required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_des2" class="form-label">Content Description 2</label>
                    <textarea class="form-control" id="content_des2" name="content_des2" rows="4" placeholder="Enter content description"  required>{{$page->content_des2}}</textarea>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="content_title3" class="form-label">Content Title 3</label>
            <input type="text" class="form-control" id="content_title3" name="content_title3" placeholder="Enter content title" value="{{$page->content_title3}}" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_image3" class="form-label">Content Image 3</label>
                    <input type="file" class="form-control" id="content_image3" name="content_image3" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="content_des3" class="form-label">Content Description 3</label>
                    <textarea class="form-control" id="content_des3" name="content_des3" rows="4" placeholder="Enter content description"  required>{{$page->content_des3}}</textarea>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="conclusion" class="form-label">Conclusion</label>
            <textarea class="form-control" id="conclusion" name="conclusion" rows="4" placeholder="Enter conclusion" required>{{$page->id}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
            </div>
        </div>
    </div>
<!-- main content area end -->

@endsection
