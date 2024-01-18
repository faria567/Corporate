@extends('include.master')
@section('content')
@section('title','Content')


@if(count($basic) != 0)

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="card-body">
                    <form method="POST" action="{{ route('content.update')}}" enctype="multipart/form-data">
                        @csrf

                          <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="slider_title" class="form-label">slider title</label>
                                <input type="text" class="form-control" value="{{$b->slider_title ?? ''}}" id="slider_title" name="slider_title">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="slider_short_title" class="form-label">slider short title</label>
                                <input type="text" class="form-control" value="{{$b->slider_short_title}}" id="slider_short_title" name="slider_short_title">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="slider_short_description" class="form-label">slider short description</label>
                                <input type="text" class="form-control" value="{{$b->slider_short_description}}" id="slider_short_description" name="slider_short_description">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="slider_button_text" class="form-label">slider button text</label>
                                <input type="text" class="form-control" value="{{$b->slider_button_text}}" id="slider_button_text" name="slider_button_text">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="service_title" class="form-label">service title</label>
                                <input type="text" class="form-control" value="{{$b->service_title}}" id="service_title" name="service_title">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="service_short_title" class="form-label">service short title</label>
                                <input type="text" class="form-control" value="{{$b->service_short_title}}" id="service_short_title" name="service_short_title">
                            </div>
                        </div>

                      

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="service_description" class="form-label">service description</label>
                                <input type="text" class="form-control" id="service_description" value="{{$b->service_description}}" name="service_description">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="service_button_text" class="form-label">service button text</label>
                                <input type="text" class="form-control" id="service_button_text" value="{{$b->service_button_text}}" name="service_button_text">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_title" class="form-label">portfolio title</label>
                                <input type="text" class="form-control" id="portfolio_title" value="{{$b->portfolio_title}}" name="portfolio_title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_short_title" class="form-label">portfolio short title</label>
                                <input type="text" class="form-control" id="portfolio_short_title" value="{{$b->portfolio_short_title}}" name="portfolio_short_title">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_short_description" class="form-label">portfolio short description</label>
                                <textarea class="form-control editor" id="portfolio_short_description"  name="portfolio_short_description">{{$b->portfolio_short_description}}</textarea>
                            </div>

                          
                        </div>
                       
                        <div class="row">

                           

                            <div class="col-md-6 mb-3">
                                <label for="team_title" class="form-label">team title</label>
                                <input type="text" class="form-control" id="team_title" value="{{$b->team_title}}" name="team_title">
                            </div>

                        </div>
                      

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="team_short_title" class="form-label">team short title</label>
                                <input type="text" class="form-control" id="team_short_title" value="{{$b->team_short_title}}" name="team_short_title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="blog_title" class="form-label">blog title</label>
                                <input type="text" class="form-control" id="blog_title" value="{{$b->blog_title}}" name="blog_title">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="blog_short_title" class="form-label">blog short title</label>
                                <input type="text" class="form-control" id="blog_short_title" value="{{$b->blog_short_title}}" name="blog_short_title">
                            </div>

                          

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="project_complete" class="form-label">project complete</label>
                                <input type="number" class="form-control" id="project_complete" value="{{$b->project_complete}}" name="project_complete">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="active_client" class="form-label">active client</label>
                                <input type="number" class="form-control" id="active_client" value="{{$b->active_client}}" name="active_client">
                            </div>

                           

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="happy_client" class="form-label">happy client</label>
                                <input type="number" class="form-control" id="happy_client" value="{{$b->happy_client}}" name="happy_client">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cup_of_coffee" class="form-label">cup of coffee</label>
                                <input type="number" class="form-control" id="cup_of_coffee" value="{{$b->cup_of_coffee}}" name="cup_of_coffee">
                            </div>

                           

                        </div>


                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="client_name" class="form-label">client name</label>
                                <input type="text" class="form-control" value="{{$b->client_name ?? ''}}" id="client_name" name="client_name">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="client_designation" class="form-label">client designation</label>
                                <input type="text" class="form-control" value="{{$b->client_designation}}" id="client_designation" name="client_designation">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="client_review" class="form-label">client review</label>
                                <input type="text" class="form-control" value="{{$b->client_review}}" id="client_review" name="client_review">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="display_title" class="form-label">display title</label>
                                <input type="text" class="form-control" value="{{$b->display_title}}" id="display_title" name="display_title">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="display_button_text" class="form-label">display button text</label>
                                <input type="text" class="form-control" value="{{$b->display_button_text ?? ''}}" id="display_button_text" name="display_button_text">
                            </div>
                              <div class="col-md-6 mb-3">
                                <label for="client_image" class="form-label">Client Image</label>
                                <input type="file" class="form-control" id="client_image" name="client_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sponsor_image" class="form-label">Sponsor Image</label>
                                <input type="file" class="form-control" id="sponsor_image" name="sponsor_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="service_image" class="form-label">Service Image</label>
                                <input type="file" class="form-control" id="service_image" name="service_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slider_image" class="form-label">Slider Image</label>
                                <input type="file" class="form-control" id="slider_image" name="slider_image">
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

    @else

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Content Update</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="card-body">

                    <form method="POST" action="{{ route('content.store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="slider_title" class="form-label">slider title</label>
                                <input type="text" class="form-control" value="{{$b->slider_title ?? ''}}" id="slider_title" name="slider_title">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="slider_short_title" class="form-label">slider short title</label>
                                <input type="text" class="form-control" value="{{$b->slider_short_title ?? ''}}" id="slider_short_title" name="slider_short_title">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="slider_short_description" class="form-label">slider short description</label>
                                <input type="text" class="form-control" value="{{$b->slider_short_description ?? ''}}" id="slider_short_description" name="slider_short_description">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="slider_button_text" class="form-label">slider button text</label>
                                <input type="text" class="form-control" value="{{$b->slider_button_text ?? ''}}" id="slider_button_text" name="slider_button_text">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="service_title" class="form-label">service title</label>
                                <input type="text" class="form-control" value="{{$b->service_title ?? ''}}" id="service_title" name="service_title">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="service_short_title" class="form-label">service short title</label>
                                <input type="text" class="form-control" value="{{$b->service_short_title ?? ''}}" id="service_short_title" name="service_short_title">
                            </div>
                        </div>

                      

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="service_description" class="form-label">service description</label>
                                <input type="text" class="form-control" id="service_description" value="{{$b->service_description ?? ''}}" name="service_description">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="service_button_text" class="form-label">service button text</label>
                                <input type="text" class="form-control" id="service_button_text" value="{{$b->service_button_text ?? ''}}" name="service_button_text">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_title" class="form-label">portfolio title</label>
                                <input type="text" class="form-control" id="portfolio_title" value="{{$b->portfolio_title ?? ''}}" name="portfolio_title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_short_title" class="form-label">portfolio short title</label>
                                <input type="text" class="form-control" id="portfolio_short_title" value="{{$b->portfolio_short_title ?? ''}}" name="portfolio_short_title">
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="portfolio_short_description" class="form-label">portfolio short description</label>
                                <textarea class="form-control editor" id="portfolio_short_description"  name="portfolio_short_description">{{$b->portfolio_short_description ?? ''}}</textarea>
                            </div>

                          
                        </div>
                       
                        <div class="row">

                           

                            <div class="col-md-6 mb-3">
                                <label for="team_title" class="form-label">team title</label>
                                <input type="text" class="form-control" id="team_title" value="{{$b->team_title ?? ''}}" name="team_title">
                            </div>

                        </div>
                      

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="team_short_title" class="form-label">team short title</label>
                                <input type="text" class="form-control" id="team_short_title" value="{{$b->team_short_title ?? ''}}" name="team_short_title">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="blog_title" class="form-label">blog title</label>
                                <input type="text" class="form-control" id="blog_title" value="{{$b->blog_title ?? ''}}" name="blog_title">
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="blog_short_title" class="form-label">blog short title</label>
                                <input type="text" class="form-control" id="blog_short_title" value="{{$b->blog_short_title ?? ''}}" name="blog_short_title">
                            </div>

                          

                        </div>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="project_complete" class="form-label">project complete</label>
                                <input type="number" class="form-control" id="project_complete" value="{{$b->project_complete ?? ''}}" name="project_complete">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="active_client" class="form-label">active client</label>
                                <input type="number" class="form-control" id="active_client" value="{{$b->active_client ?? ''}}" name="active_client">
                            </div>

                           

                        </div>


                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label for="happy_client" class="form-label">happy client</label>
                                <input type="number" class="form-control" id="happy_client" value="{{$b->happy_client ?? ''}}" name="happy_client">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="cup_of_coffee" class="form-label">cup of coffee</label>
                                <input type="number" class="form-control" id="cup_of_coffee" value="{{$b->cup_of_coffee ?? ''}}" name="cup_of_coffee">
                            </div>

                           

                        </div>


                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="client_name" class="form-label">client name</label>
                                <input type="text" class="form-control" value="{{$b->client_name ?? ''}}" id="client_name" name="client_name">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="client_designation" class="form-label">client designation</label>
                                <input type="text" class="form-control" value="{{$b->client_designation ?? ''}}" id="client_designation" name="client_designation">
                            </div>
                            <div class=" col-md-6  mb-3">
                                <label for="client_review" class="form-label">client review</label>
                                <input type="text" class="form-control" value="{{$b->client_review ?? ''}}" id="client_review" name="client_review">
                            </div>

                            <div class=" col-md-6 mb-3">
                                <label for="display_title" class="form-label">display title</label>
                                <input type="text" class="form-control" value="{{$b->display_title ?? ''}}" id="display_title" name="display_title">
                            </div>
                        </div>

                        <div class="row">
                            <div class=" col-md-6  mb-3">
                                <label for="display_button_text" class="form-label">display button text</label>
                                <input type="text" class="form-control" value="{{$b->display_button_text ?? ''}}" id="display_button_text" name="display_button_text">
                            </div>
                              <div class="col-md-6 mb-3">
                                <label for="client_image" class="form-label">Client Image</label>
                                <input type="file" class="form-control" id="client_image" name="client_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sponsor_image" class="form-label">Sponsor Image</label>
                                <input type="file" class="form-control" id="sponsor_image" name="sponsor_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="service_image" class="form-label">Service Image</label>
                                <input type="file" class="form-control" id="service_image" name="service_image">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slider_image" class="form-label">Slider Image</label>
                                <input type="file" class="form-control" id="slider_image" name="slider_image">
                            </div>

                            
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
    @endif

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    // Get all elements with the class name "editor"
    const editors = document.querySelectorAll('.editor');

    // Loop through each editor element
    for (let i = 0; i < editors.length; i++) {
    const editor = editors[i];

    // Create a text editor for the current editor element
    ClassicEditor
        .create(editor)
        .catch(error => {
        console.error(error);
        });
    }
</script>

@endsection
