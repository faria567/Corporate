<?php

namespace App\Http\Controllers;
use App\Models\Content;
use DB;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::latest()->paginate(10);

        return view('content.index', compact('content'));
    }

   

    // public function create()
    // {
    //     return view('content.create');
    // }

    public function create()
    {
    	$basic = Content::all();

    	$b =  Content::first();
    	return view('Content.create', compact('basic', 'b'));
    }

    public function store(Request $request, Content $content)
    {
        $request->validate([
            'slider_title' => 'required|string',
            'slider_image' => 'image|mimes:jpeg,gif,png,jpg',
            'slider_short_title' =>  'required|string',
            'slider_short_description' =>  'required|string',
        ]);
        

        if ($request->hasFile('client_image') && $request->client_image != null) {
            $ext = $request->file('client_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;

            $request->file('client_image')->move(public_path('uploads/'), $final_name);

            $content->client_image = $final_name;
        }
        if ($request->hasFile('sponsor_image') && $request->sponsor_image != null) {
            $ext = $request->file('sponsor_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;

            $request->file('sponsor_image')->move(public_path('uploads/'), $final_name);

            $content->sponsor_image = $final_name;
        }
        if ($request->hasFile('service_image') && $request->service_image != null) {
            $ext = $request->file('service_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;

            $request->file('service_image')->move(public_path('uploads/'), $final_name);

            $content->service_image = $final_name;
        }
        if ($request->hasFile('slider_image') && $request->slider_image != null) {
            $ext = $request->file('slider_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;

            $request->file('slider_image')->move(public_path('uploads/'), $final_name);

            $content->slider_image = $final_name;
        }


        $content->slider_title = $request->slider_title;
        $content->slider_short_title = $request->slider_short_title;
        $content->slider_short_description = $request->slider_short_description;
        $content->slider_button_text = $request->slider_button_text;
        $content->service_title = $request->service_title;
        $content->service_short_title = $request->service_short_title;
        $content->service_description = $request->service_description;
        $content->service_button_text = $request->service_button_text;
        $content->portfolio_title = $request->portfolio_title;
        $content->portfolio_short_title = $request->portfolio_short_title;
        $content->portfolio_short_description = $request->portfolio_short_description;
        $content->team_title = $request->team_title;
        $content->team_short_title = $request->team_short_title;
        $content->blog_title = $request->blog_title;
        $content->blog_short_title = $request->blog_short_title;
        $content->project_complete = $request->project_complete;
        $content->active_client = $request->active_client;
        $content->happy_client = $request->happy_client;
        $content->cup_of_coffee = $request->cup_of_coffee;
        $content->client_name = $request->client_name;
        $content->client_designation = $request->client_designation;
        $content->client_review = $request->client_review;
        $content->display_title = $request->display_title;
        $content->display_button_text = $request->display_button_text;
       
        $content->save();
       
       
        return redirect()->back()->with('success', 'You successfully add Content');

    }

    

    
    public function edit($id)
    {
        
        $content = Content::findOrFail($id);
        return view('Content.edit', compact('content'));
    }

   


    // public function update(Request $request)
    // {
    //     $content = Content::findOrFail($id);
    //     $request->validate([
    //         'slider_title' => 'required|string',
    //         'slider_image' => 'image|mimes:jpeg,gif,png,jpg',
    //         'slider_short_title' =>  'required|string',
    //         'slider_short_description' =>  'required|string',

    //     ]);
       

    //     if ($request->hasFile('client_image') && $request->client_image != null) {
    //                 if ($content->client_image != null) {
    //                 unlink(public_path('uploads/'.$content->client_image));
    //                }
    //                 $ext = $request->file('client_image')->extension();
    //                 $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
        
    //              $request->file('client_image')->move(public_path('uploads/'), $final_name);
        
    //                  $content->client_image = $final_name;
    //              }

    //              if ($request->hasFile('sponsor_image') && $request->sponsor_image != null) {
    //                 if ($content->sponsor_image != null) {
    //                 unlink(public_path('uploads/'.$content->sponsor_image));
    //                }
    //                 $ext = $request->file('sponsor_image')->extension();
    //                 $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
        
    //              $request->file('sponsor_image')->move(public_path('uploads/'), $final_name);
        
    //                  $content->sponsor_image = $final_name;
    //              }

    //              if ($request->hasFile('service_image') && $request->service_image != null) {
    //                 if ($content->service_image != null) {
    //                 unlink(public_path('uploads/'.$content->service_image));
    //                }
    //                 $ext = $request->file('service_image')->extension();
    //                 $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
        
    //              $request->file('service_image')->move(public_path('uploads/'), $final_name);
        
    //                  $content->service_image = $final_name;
    //              }

    //              if ($request->hasFile('slider_image') && $request->slider_image != null) {
    //                 if ($content->slider_image != null) {
    //                 unlink(public_path('uploads/'.$content->slider_image));
    //                }
    //                 $ext = $request->file('slider_image')->extension();
    //                 $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
        
    //              $request->file('slider_image')->move(public_path('uploads/'), $final_name);
        
    //                  $content->slider_image = $final_name;
    //              }

    //              $content->slider_title = $request->slider_title;
    //     $content->slider_short_title = $request->slider_short_title;
    //     $content->slider_short_description = $request->slider_short_description;
    //     $content->slider_button_text = $request->slider_button_text;
    //     $content->service_title = $request->service_title;
    //     $content->service_short_title = $request->service_short_title;
    //     $content->service_description = $request->service_description;
    //     $content->service_button_text = $request->service_button_text;
    //     $content->portfolio_title = $request->portfolio_title;
    //     $content->portfolio_short_title = $request->portfolio_short_title;
    //     $content->portfolio_short_description = $request->portfolio_short_description;
    //     $content->team_title = $request->team_title;
    //     $content->team_short_title = $request->team_short_title;
    //     $content->blog_title = $request->blog_title;
    //     $content->blog_short_title = $request->blog_short_title;
    //     $content->project_complete = $request->project_complete;
    //     $content->active_client = $request->active_client;
    //     $content->happy_client = $request->happy_client;
    //     $content->cup_of_coffee = $request->cup_of_coffee;
    //     $content->client_name = $request->client_name;
    //     $content->client_designation = $request->client_designation;
    //     $content->client_review = $request->client_review;
    //     $content->display_title = $request->display_title;
    //     $content->display_button_text = $request->display_button_text;
                
    //               $content->update();
    //               return redirect()->back()->with('success', 'You successfully updated Content');
    // }

    public function update(Request $request)
    {
    // Validate the input
     $request->validate([
        'slider_title' => 'required|string',
             'slider_image' => 'image|mimes:jpeg,gif,png,jpg',
         'slider_short_title' =>  'required|string',
         'slider_short_description' =>  'required|string',
    
    ]);

    $b =  DB::table('contents')->first();

    
     $content= Content::find($b->id);
     if ($request->hasFile('client_image')) {
                        if ($content->client_image != null) {
                        unlink(public_path('uploads/'.$content->client_image));
                       }
                        $ext = $request->file('client_image')->extension();
                        $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
            
                     $request->file('client_image')->move(public_path('uploads/'), $final_name);
            
                         $content->client_image = $final_name;
                     }
    
                     if ($request->hasFile('sponsor_image') ) {
                        if ($content->sponsor_image != null) {
                        unlink(public_path('uploads/'.$content->sponsor_image));
                       }
                        $ext = $request->file('sponsor_image')->extension();
                        $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
            
                     $request->file('sponsor_image')->move(public_path('uploads/'), $final_name);
            
                         $content->sponsor_image = $final_name;
                     }
    
                     if ($request->hasFile('service_image') ) {
                        if ($content->service_image != null) {
                        unlink(public_path('uploads/'.$content->service_image));
                       }
                        $ext = $request->file('service_image')->extension();
                        $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
            
                     $request->file('service_image')->move(public_path('uploads/'), $final_name);
            
                         $content->service_image = $final_name;
                     }
    
                     if ($request->hasFile('slider_image')) {
                        if ($content->slider_image != null) {
                        unlink(public_path('uploads/'.$content->slider_image));
                       }
                        $ext = $request->file('slider_image')->extension();
                        $final_name = time().'-'.uniqid().'-'.'content'.'.'.$ext;
            
                     $request->file('slider_image')->move(public_path('uploads/'), $final_name);
            
                         $content->slider_image = $final_name;
                     }

    
                $content->slider_title = $request->input('slider_title');
        $content->slider_short_title = $request->input('slider_short_title');
        $content->slider_short_description = $request->input('slider_short_description');
        $content->slider_button_text = $request->input('slider_button_text');
        $content->service_title = $request->input('service_title');
        $content->service_short_title = $request->input('service_short_title');
        $content->service_description = $request->input('service_description');
        $content->service_button_text = $request->input('service_button_text');
        $content->portfolio_title = $request->input('portfolio_title');
        $content->portfolio_short_title = $request->input('portfolio_short_title');
        $content->portfolio_short_description = $request->input('portfolio_short_description');
        $content->team_title = $request->input('team_title');
        $content->team_short_title = $request->input('team_short_title');
        $content->blog_title = $request->input('blog_title');
        $content->blog_short_title = $request->input('blog_short_title');
        $content->project_complete = $request->input('project_complete');
        $content->active_client = $request->input('active_client');
        $content->happy_client = $request->input('happy_client');
        $content->cup_of_coffee = $request->input('cup_of_coffee');
        $content->client_name = $request->input('client_name');
        $content->client_designation = $request->input('client_designation');
        $content->client_review = $request->input('client_review');
        $content->display_title = $request->input('display_title'); 
        $content->display_button_text = $request->input('display_button_text');

    $content->update();
    return redirect()->back()->with('success', 'You successfully updated site setting');
    }



    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        if ($content->image != null) {
            unlink(public_path('uploads/'.$content->image));
        }
      
        $content->delete();

        return redirect()->back()->with('delete','content has been Deleted successfully');
    }
}
