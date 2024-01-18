@extends('include.master')
@section('content')
@section('title','Product')


    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
            <form method="POST" action="{{ route('partner.store')}}" enctype="multipart/form-data">
                        @csrf

                          <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="icon" class="form-label">Link</label>
                                <input type="text" class="form-control" id="url" name="url">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6 mb-3">
                                <label for="logo" class="form-label">Icon</label>
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
<!-- main content area end -->

@endsection
