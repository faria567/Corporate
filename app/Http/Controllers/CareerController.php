<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $career = Career::latest()->paginate(10);
        return view('Career.index',compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Career.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Career $career)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',
        ]);
       

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'career'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $career->image = $final_name;
        }


        $career->title = $request->title;
      
        $career->description = $request->description;
        $career->salary_range = $request->salary_range;
        $career->application_deadline = $request->application_deadline;
        

        $career->save();
       
       
        return redirect()->route('career.index');
    }

    /**
     * Display the specified resource.
     */
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $career = Career::findOrFail($id);
        return view('Career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $career = Career::findOrFail($id);
        $request->validate([
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',

        ]);
       
        if ($request->hasFile('image') && $request->image != null) {
                    if ($career->image != null) {
                    unlink(public_path('uploads/'.$career->image));
                   }
                    $ext = $request->file('image')->extension();
                    $final_name = time().'-'.uniqid().'-'.'career'.'.'.$ext;
        
                 $request->file('image')->move(public_path('uploads/'), $final_name);
        
                     $career->image = $final_name;
                 }

        $career->title = $request->title;
       
        $career->description = $request->description;
        $career->salary_range = $request->salary_range;
        $career->application_deadline = $request->application_deadline;
        $career->update();
        return redirect()->route('career.index');
    }

    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        if ($career->image != null) {
            unlink(public_path('uploads/'.$career->image));
        }
        

        $career->delete();

        return redirect()->back()->with('delete','Career has been Deleted successfully');
    }
}
