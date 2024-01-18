<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class DynamicPageController extends Controller
{

    public function index()
    {
        $pages = Page::all();

        return view('pages.index', compact('pages'));
    }


    public function create()
    {
        return view('pages.create');
    }


    public function store(Request $request)
    {
            $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content_title1' => 'required|string|max:255',
            'content_image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content_des1' => 'required|string',
            'content_title2' => 'required|string|max:255',
            'content_image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content_des2' => 'required|string',
            'content_title3' => 'required|string|max:255',
            'content_image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content_des3' => 'required|string',
            'conclusion' => 'required|string',
        ]);


            $page                   = new Page();
            $page->title            = $request->title;
            $page->description      = $request->description;
            $page->content_title1   = $request->content_title1;

            if ($request->hasFile('content_image1') && $request->image != null) {
            $ext = $request->file('content_image1')->extension();
            $final_name = time().'-'.uniqid().'-'.'page'.'.'.$ext;

            $request->file('content_image1')->move(public_path('uploads/'), $final_name);

            $page->content_image1 = $final_name;
            }

            $page->content_des1     = $request->content_des1;
            $page->content_title2   = $request->content_title2;
            
            if ($request->hasFile('content_image2') && $request->image != null) {
            $ext = $request->file('content_image2')->extension();
            $final_name = time().'-'.uniqid().'-'.'page'.'.'.$ext;

            $request->file('content_image2')->move(public_path('uploads/'), $final_name);

            $page->content_image2 = $final_name;
            }

            $page->content_des2     = $request->content_des2;
            $page->content_title3   = $request->content_title3;
            
            if ($request->hasFile('content_image3') && $request->image != null) {
            $ext = $request->file('content_image3')->extension();
            $final_name = time().'-'.uniqid().'-'.'page'.'.'.$ext;

            $request->file('content_image3')->move(public_path('uploads/'), $final_name);

            $page->content_image3 = $final_name;
            }
            $page->content_des3     = $request->content_des3;
            $page->conclusion       = $request->conclusion;
            $page->save();
     

        return redirect()->back()->with('success','Page created successfully.');
    }


    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }


    public function edit($id)
    {
        $page = Page::find($id);
        return view('pages.edit', compact('page'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content_title1' => 'required',
            'content_image1' => 'required',
            'content_des1' => 'required',
            'content_title2' => 'required',
            'content_image2' => 'required',
            'content_des2' => 'required',
            'content_title3' => 'required',
            'content_image3' => 'required',
            'content_des3' => 'required',
            'conclusion' => 'required',
        ]);

            $page                   = Page::find($id);
            $page->title            = $request->title;
            $page->description      = $request->description;
            $page->content_title1   = $request->content_title1;

            if ($request->hasFile('content_image1')) {
            if ($service->icon != null) {
                    unlink(public_path('page/'.$service->icon));
            }
            $ext = $request->file('content_image1')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;
    
            $request->file('content_image1')->move(public_path('uploads/'), $final_name);
    
            $page->content_image1 = $final_name;
            
            }

            $page->content_des1     = $request->content_des1;
            $page->content_title2   = $request->content_title2;
            
            if ($request->hasFile('content_image2')) {
            if ($service->icon != null) {
                    unlink(public_path('page/'.$service->icon));
            }
            $ext = $request->file('content_image2')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;
    
            $request->file('content_image2')->move(public_path('uploads/'), $final_name);
    
            $page->content_image2 = $final_name;
            
            }

            $page->content_des2     = $request->content_des2;
            $page->content_title3   = $request->content_title3;
            
            if ($request->hasFile('content_image3')) {
            if ($service->icon != null) {
                    unlink(public_path('page/'.$service->icon));
            }
            $ext = $request->file('content_image3')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;
    
            $request->file('content_image3')->move(public_path('uploads/'), $final_name);
    
            $page->content_image3 = $final_name;
            
            }
            $page->content_des3     = $request->content_des3;
            $page->conclusion       = $request->conclusion;
            $page->save();

        return redirect()->back()->with('success','Page updated successfully');
    }


    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->back()->with('success','Page deleted successfully');
    }
}