@extends('include.master')
@section('content')
@section('title','Career')

<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
            <form class="form-valide" action="{{route('career.store')}}" method="post" enctype="multipart/form-data">
            @csrf
                <h4 class="header-title">Career</h4>

                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Career Title</label>
                    <input class="form-control" type="text" name="title" value="{{old('title')}}" id="example-text-input">

                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

              
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Description</label>
                    <textarea id="editor" class="form-control" name="description" id="example-text-input">{{old('decription')}}
                    </textarea>
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>


               



                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">salary Range</label>
                    <input class="form-control" type="text" name="salary_range" value="{{old('salary_range')}}" id="example-text-input">

                    @error('salary_range')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Application Deadline</label>
                    
                    <input class="form-control" type="date" name="application_deadline" value="{{old('application_deadline')}}" id="example-text-input">

                    @error('application_deadline')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="example-text-input" class="col-form-label"> Image</label>
                    <input class="form-control" type="file" name="image" id="example-text-input">
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                </div>


                <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
<!-- main content area end -->

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection
