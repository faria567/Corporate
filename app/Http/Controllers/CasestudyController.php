<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casestudy;

class CasestudyController extends Controller
{
    public function index()
    {
        $casestudy = Casestudy::latest()->paginate(10);
        return view('Casestudy.index',compact('casestudy'));
    }

    
    
    public function create()
    {
        return view('Casestudy.create');
    }

    public function store(Request $request, Casestudy $casestudy)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',
        ]);
        if ($request->hasFile('icon')) {
            $ext = $request->file('icon')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;

            $request->file('icon')->move(public_path('uploads/'), $final_name);

            $casestudy->icon = $final_name;

    }

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'casestudy'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $casestudy->image = $final_name;
        }


        $casestudy->title = $request->title;
      
        $casestudy->description = $request->description;
       
        

        $casestudy->save();
       
       
        return redirect()->route('casestudy.index');
    }

    

    
    public function edit($id)
    {
        
        $casestudy = Casestudy::findOrFail($id);
        return view('Casestudy.edit', compact('casestudy'));
    }

   


    public function update(Request $request, $id)
    {
        $casestudy = Casestudy::findOrFail($id);
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',

        ]);
        if ($request->hasFile('icon')) {
            if ($casestudy->icon != null) {
                    unlink(public_path('site_icon/'.$casestudy->icon));
            }
            $ext = $request->file('icon')->extension();
            $final_name = time().'-'.uniqid().'-'.'icon'.'.'.$ext;
    
            $request->file('icon')->move(public_path('uploads/'), $final_name);
    
            $casestudy->icon = $final_name;
        }

        if ($request->hasFile('image') && $request->image != null) {
                    if ($casestudy->image != null) {
                    unlink(public_path('uploads/'.$casestudy->image));
                   }
                    $ext = $request->file('image')->extension();
                    $final_name = time().'-'.uniqid().'-'.'casestudy'.'.'.$ext;
        
                 $request->file('image')->move(public_path('uploads/'), $final_name);
        
                     $casestudy->image = $final_name;
                 }

        $casestudy->title = $request->title;
       
        $casestudy->description = $request->description;
        $casestudy->update();
        return redirect()->route('casestudy.index');
    }




    public function destroy($id)
    {
        $casestudy = Casestudy::findOrFail($id);
        if ($casestudy->image != null) {
            unlink(public_path('uploads/'.$casestudy->image));
        }
        if ($casestudy->icon != null) {
            unlink(public_path('uploads/'.$casestudy->icon));
        }

        $casestudy->delete();

        return redirect()->back()->with('delete','casestudy has been Deleted successfully');
    }
}
