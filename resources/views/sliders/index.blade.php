@extends('include.master')
@section('content')
@section('title','Partner')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<div class="row" style="margin: 0px -2px">
      <div class="bg-white py-3 rounded" style="border: 1px solid lightgray" >
        <div class="align-self-center" style="color: black">
          <h4 class="header-title">Partner </h4>
        </div>
        <div id="dashbord-border"></div>
      </div>
    </div>

    <div class="row" style="margin: 0px -2px">
      <div class="search-option rounded bg-white" style="border: 1px solid lightgray; border-top: none" >
        <form action="" method="get" class="row text-start pt-4">
          <div class="col-md-8">
              <div class="row">
                  <div class="form-group col-md-3 ms-md-4">
                      <input type="text" class="form-control" name="name" placeholder="name" />
                  </div> 
                  <div class=" col-md-3">
                      <button type="submit" class="search-btn btn btn-info" ><i class="fa fa-search"></i> SEARCH </button>
                  </div>
              </div>
          </div>
          <div class=" col-md-4 text-start text-md-end" >
            <a class="btn btn-success my-3 my-md-0 me-2 "  href="{{route('slider.create')}}"><i class="fa fa-plus"></i> Add new</a>
          </div>
        </form>
      </div>
    </div>



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                
                <div class="table-responsive m-t-40">
                    <table id="example23"
                        class="display nowrap table table-hover table-striped border"
                        cellspacing="0" width="100%">
                     
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Partner Name</th>
                                        <th>URL</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->title}}</td>
                                        <td>{{$slider->des}}</td>
                                        <td> <img src="{{ asset('/slider/'. $slider->image)}}" alt="" height="50" width="80"></td>
                                        <td>
                                            <a href="{{route('sliders.edit', $slider->id)}}" class="btn btn-success btn-sm" title="Edit partner">
                                                <i class="fa fa-edit"></i>
                                            </a>
                
                                            <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                    </table>
                 
                </div>
            </div>
        </div>

    </div>
</div>


@endsection