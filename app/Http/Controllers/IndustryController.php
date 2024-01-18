<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;

class IndustryController extends Controller
{
    public function index()
    {
        $industry = Industry::get();
        return view('Industry.index',compact('industry'));
    }
   
   
    
    public function create()
    {
        return view('Industry.create');
    }

    public function store(Request $request, Industry $industry)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',
        ]);
     

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'industry'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $industry->image = $final_name;
        }


        $industry->name = $request->name;
      
        $industry->description = $request->description;
       
        

        $industry->save();
       
       
        return redirect()->route('industry.index');
    }

    

    
    public function edit($id)
    {
        
        $industry = Industry::findOrFail($id);
        return view('Industry.edit', compact('industry'));
    }

   


    public function update(Request $request, $id)
    {
        $industry = Industry::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',

        ]);
      

        if ($request->hasFile('image') && $request->image != null) {
                    if ($industry->image != null) {
                    unlink(public_path('uploads/'.$industry->image));
                   }
                    $ext = $request->file('image')->extension();
                    $final_name = time().'-'.uniqid().'-'.'industry'.'.'.$ext;
        
                 $request->file('image')->move(public_path('uploads/'), $final_name);
        
                     $industry->image = $final_name;
                 }

        $industry->name = $request->name;
       
        $industry->description = $request->description;
        $industry->update();
        return redirect()->route('industry.index');
    }




    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        if ($industry->image != null) {
            unlink(public_path('uploads/'.$industry->image));
        }
       

        $industry->delete();

        return redirect()->back()->with('delete','Industry has been Deleted successfully');
    }
}
