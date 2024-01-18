<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{

    public function index1()
    {

        $members = Team::latest()->get();

        return view('Team.index', compact('members'));
    }

    public function list()
    {

        $members = Team::latest()->get();

        return view('Team.index', compact('members'));
    }

    public function create()
    {
        return view('Team.create');
    }


    public function store(Request $request)
    {
        $request->validate([
        'name' => 'nullable'
        ]);

       $team            = new Team();
       $team->name      = $request->name;
       $team->position  = $request->position;
       if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'image'.'.'.$ext;

            $request->file('image')->move(public_path('team/'), $final_name);

            $team->image = $final_name;
        }

       $team->facebook   = $request->facebook;
       $team->instagram  = $request->instagram;
       $team->twitter   = $request->twitter;
       $team->linkedin   = $request->linkedin;
       $team->save();

       return redirect()->back()->with('success', 'You have add new partner');
    }

   
    public function show(string $id)
    {
       
    }

  
    public function edit(string $id)
    {
       $team = Team::find($id);
       return view('Team.edit', compact('team'));
    }
    
    
    
    public function update(Request $request, string $id)
    {
       $request->validate([
        'name' => 'nullable'
       ]);

       $team            = Team::find($id);
       $team->name      = $request->name;
       $team->position  = $request->position;
       if ($request->hasFile('image')) {
        if ($team->image != null) {
                unlink(public_path('team/'.$team->image));
        }
        $ext = $request->file('image')->extension();
        $final_name = time().'-'.uniqid().'-'.'image'.'.'.$ext;

        $request->file('image')->move(public_path('team/'), $final_name);

        $team->image = $final_name;
        }

       $team->facebook   = $request->facebook;
       $team->instagram  = $request->instagram;
       $team->twitter    = $request->twitter;
       $team->linkedin   = $request->linkedin;
       $team->update();

       return redirect()->back()->with('success', 'You have add new partner');
    }

 
    public function destroy(string $id)
    {
      $team = Team::find($id);
       if ($team->image != null) {
                unlink(public_path('team/'.$team->image));
        }
       $team->delete();

       return redirect()->back()->with('success', 'You have deleted the partner');
    }
}
