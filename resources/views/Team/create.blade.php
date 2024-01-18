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
                    <form method="POST" action="{{ route('team.store')}}" enctype="multipart/form-data">
                        @csrf

                          <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="name" class="form-label">name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="icon" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="position" name="position">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6 mb-3">
                                <label for="logo" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="linkedin" class="form-label">Linkedin</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                        </div>


                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter">
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
