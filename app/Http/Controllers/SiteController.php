<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Casestudy;
use App\Models\Service;
use App\Models\Product;
use App\Models\Team;
use App\Models\Career;
use App\Models\Content;
class SiteController extends Controller
{
    public function blogsfront()
    {
        $blogfront = Blog::get();
        return view('website.blogs', compact('blogfront'));
    }

    public function blogsdetails()
    {
        return view('website.blog_details');
    }

    public function services()
    {
        $service = Service::get();
        return view('website.services', compact('service'));
    }

    public function mainindex()
    {
        $blogfront = Blog::get();
        $service = Service::get();
        $members = Team::get();
        $product = Product::get();
        $casestudy = Casestudy::get();
        $content = Content::get();
        return view('website.index', compact('service','blogfront','members','product','casestudy','content'));
    }

    public function about()
    {
        $members = Team::get();
        $content = Content::get();
        return view('website.about', compact('members','content'));
    }

    public function product()
    {
        $product = Product::get();
        return view('website.product', compact('product'));
    }

    public function contact()
    {
        return view('website.contact');
    }
    public function casestudy()
    {
        $casestudy = Casestudy::get();
        return view('website.casestudy',compact('casestudy'));
    }
    public function career()
    {
        $career = Career::get();
        return view('website.career',compact('career'));
    }
   

    public function show($id)
    {
        $career = Career::find($id);
        return view('website.show',compact('career'));
    }

    
    public function content()
    {
        $content = Content::get();
        return view('website.content',compact('content'));
    }
}
