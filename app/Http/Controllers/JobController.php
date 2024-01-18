<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    
    public function index()
    {
        
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request, Job $job)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            
        ]);
       

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'career'.'.'.$ext;

            $request->file('image')->move(public_path('uploads/'), $final_name);

            $job->image = $final_name;
        }


        $job->name = $request->name;
        $job->email = $request->email;
        $job->phone_number = $request->phone_number;
        $job->resume = $request->resume;
        $job->cover_letter = $request->cover_letter;
        $job->signature = $request->signature;
        $job->expected_salary = $request->expected_salary;
        $job->save();
       
        $job = Job::get();
        return redirect()->route('website.career',compact('job'));
    }

    
    public function show(string $id)
    {
       
    }

    
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        if ($job->image != null) {
            unlink(public_path('uploads/'.$job->image));
        }
        $job->delete();
        return redirect()->back()->with('delete','Job has been Deleted successfully');
    }
}
