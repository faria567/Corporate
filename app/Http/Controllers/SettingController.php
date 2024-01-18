<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
    	return view('Basic.index');
    }


    public function create()
    {
    	$basic = Setting::all();

    	$b =  Setting::first();
    	return view('Basic.create', compact('basic', 'b'));
    }


    public function store(Request $request)
    {



    // Validate the input
     $request->validate([
        'theme_color' => 'nullable|string',
        'address' => 'nullable|string',
        'description' => 'nullable|string',
        'name' => 'nullable|string',
        'phone_number' => 'nullable|string',
        'phone_number2' => 'nullable|string',
        'email' => 'nullable|string',
        'website' => 'nullable|string',
        'social_media_links' => 'nullable',
        'site_slogan' => 'nullable',
        'site_title' => 'nullable',
        'site_des' => 'nullable',
        'facebook' => 'nullable|string',
        'twitter' => 'nullable|string',
        'instagram' => 'nullable|string',
        'linkedin' => 'nullable|string',
    ]);


    $SiteSetting = new Setting;

    if ($request->hasFile('logo')) {
            $ext = $request->file('logo')->extension();
            $final_name = time().'-'.uniqid().'-'.'logo'.'.'.$ext;

            $request->file('logo')->move(public_path('site_logo/'), $final_name);

            $SiteSetting->logo = $final_name;
     }
     if ($request->hasFile('logo2')) {
        $ext = $request->file('logo2')->extension();
        $final_name = time().'-'.uniqid().'-'.'logo2'.'.'.$ext;

        $request->file('logo2')->move(public_path('site_logo/'), $final_name);

        $SiteSetting->logo2 = $final_name;
 }


    if ($request->hasFile('icon')) {
            $ext = $request->file('icon')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;

            $request->file('icon')->move(public_path('site_icon/'), $final_name);

            $SiteSetting->icon = $final_name;

    }

    if ($request->hasFile('site_image')) {
        $ext = $request->file('site_image')->extension();
        $final_name = time().'-'.uniqid().'-'.'site_image'.'.'.$ext;

        $request->file('site_image')->move(public_path('site_image/'), $final_name);

        $SiteSetting->site_image = $final_name;
    }

    $SiteSetting->name       = $request->input('name');
    $SiteSetting->site_slogan     = $request->input('site_slogan');
    $SiteSetting->site_title      = $request->input('site_title');
        $SiteSetting->site_des      = $request->input('site_des');

    $SiteSetting->description        = $request->input('description');

   $SiteSetting->theme_color  = $request->input('theme_color');
   $SiteSetting->address 	 = $request->input('address');
   $SiteSetting->phone_number 	= $request->input('phone_number');
   $SiteSetting->phone_number2 = $request->input('phone_number2');
   $SiteSetting->email 	 = $request->input('email');
    $SiteSetting->website 	 = $request->input('website');
   
  
 $SiteSetting->social_media_links 		= $request->input('social_media_links');

 
    $SiteSetting->facebook 		= $request->input('facebook');
    $SiteSetting->twitter 	 = $request->input('twitter');
    $SiteSetting->instagram  = $request->input('instagram');
    $SiteSetting->linkedin  = $request->input('linkedin');
    $SiteSetting->save();
    return redirect()->back()->with('success', 'You successfully add site setting');

   	}




    public function update(Request $request)
    {
    // Validate the input
     $request->validate([
        'theme_color' => 'nullable|string',
        'address' => 'nullable|string',
        'description' => 'nullable|string',
        'name' => 'nullable|string',
        'phone_number' => 'nullable|string',
        'phone_number2' => 'nullable|string',
        'email' => 'nullable|string',
        'website' => 'nullable|string',
        'social_media_links' => 'nullable',
        'site_slogan' => 'nullable',
        'site_title' => 'nullable',

        'site_des' => 'nullable',
        'facebook' => 'nullable|string',
        'twitter' => 'nullable|string',
        'instagram' => 'nullable|string',
        'linkedin' => 'nullable|string',
    ]);

    $b =  DB::table('settings')->first();

    
     $SiteSetting 					    = Setting::find($b->id);

    if ($request->hasFile('logo')) {
        if ($SiteSetting->logo != null) {
                unlink(public_path('site_logo/'.$SiteSetting->logo));
        }
        $ext = $request->file('logo')->extension();
        $final_name = time().'-'.uniqid().'-'.'logo'.'.'.$ext;

        $request->file('logo')->move(public_path('site_logo/'), $final_name);

        $SiteSetting->logo = $final_name;
    }
    if ($request->hasFile('logo2')) {
        if ($SiteSetting->logo != null) {
                unlink(public_path('site_logo/'.$SiteSetting->logo));
        }
        $ext = $request->file('logo2')->extension();
        $final_name = time().'-'.uniqid().'-'.'logo2'.'.'.$ext;

        $request->file('logo2')->move(public_path('site_logo/'), $final_name);

        $SiteSetting->logo = $final_name;
    }


    if ($request->hasFile('icon')) {
        if ($SiteSetting->icon != null) {
                unlink(public_path('site_icon/'.$SiteSetting->icon));
        }
        $ext = $request->file('icon')->extension();
        $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;

        $request->file('icon')->move(public_path('site_icon/'), $final_name);

        $SiteSetting->icon = $final_name;
    }


    if ($request->hasFile('site_image')) {
        if ($SiteSetting->site_image != null) {
                unlink(public_path('site_image/'.$SiteSetting->site_image));
        }
        $ext = $request->file('site_image')->extension();
        $final_name = time().'-'.uniqid().'-'.'site_image'.'.'.$ext;

        $request->file('site_image')->move(public_path('site_image/'), $final_name);

        $SiteSetting->site_image = $final_name;
    }

    $SiteSetting->name       = $request->input('name');
    $SiteSetting->site_slogan     = $request->input('site_slogan');
    $SiteSetting->site_title      = $request->input('site_title');
        $SiteSetting->site_des      = $request->input('site_des');

    $SiteSetting->description        = $request->input('description');

   $SiteSetting->theme_color  = $request->input('theme_color');
   $SiteSetting->address 	 = $request->input('address');
   $SiteSetting->phone_number 	= $request->input('phone_number');
   $SiteSetting->phone_number2 = $request->input('phone_number2');
   $SiteSetting->email 	 = $request->input('email');
    $SiteSetting->website 	 = $request->input('website');
   
  
 $SiteSetting->social_media_links 		= $request->input('social_media_links');

 
    $SiteSetting->facebook 		= $request->input('facebook');
    $SiteSetting->twitter 	 = $request->input('twitter');
    $SiteSetting->instagram  = $request->input('instagram');
    $SiteSetting->linkedin  = $request->input('linkedin');


   
    $SiteSetting->update();



    return redirect()->back()->with('success', 'You successfully updated site setting');
    }


    public function destroy($id)
    {
    	$basic = Setting::find($id);
    	$basic->delete();

    	return redirect()->back()->with('success', 'You have been deleted your basic site settings');
    }

}
