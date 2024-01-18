<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('blogs.index', compact('blogs'));
    }

   

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|url',
            'content' => 'nullable|string',
        ]);

        $blog = new Blog();
        $blog->category_id = $request->category_id;
        $blog->title = $request->title;
         if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'image'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $blog->image = $final_name;

    }
        $blog->video = $request->video;
        $blog->content = $request->content;
        $blog->save();

        return redirect()->route('blogs.index')
                        ->with('success','Blog created successfully.');
    }


    public function show(Blog $blog)
    {
        // return view('blogs.show', compact('blog'));
    }


    public function edit(Blog $blog)
    {

        return view('blogs.edit', compact('blog'));
    }


    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|url',
            'content' => 'nullable|string',
        ]);

        $blog->category_id = $request->category_id;
        $blog->title = $request->title;

        if ($request->hasFile('image')) {
            if ($service->image != null) {
                    unlink(public_path('site_image/'.$service->image));
            }
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'image'.'.'.$ext;
    
            $request->file('image')->move(public_path('uploads/'), $final_name);
    
            $service->image = $final_name;
        }

        $blog->video = $request->video;
        $blog->content = $request->content;
        $blog->update();

        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');
    }

    

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blogs.index')
                        ->with('success','Blog deleted successfully');
    }
}