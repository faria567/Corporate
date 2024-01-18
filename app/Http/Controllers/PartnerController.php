<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{

    public function index()
    {
        $partners = Partner::all();
        return view('Partner.index', compact('partners'));
    }


    public function create()
    {
        return view('Partner.create');
    }


    public function store(Request $request)
    {
       $request->validate([
        'name' => 'nullable'
       ]);

       $partner         = new Partner();
       $partner->name   = $request->name;
       if ($request->hasFile('logo')) {
            $ext = $request->file('logo')->extension();
            $final_name = time().'-'.uniqid().'-'.'logo'.'.'.$ext;

            $request->file('logo')->move(public_path('partner/'), $final_name);

            $partner->logo = $final_name;
        }

       $partner->url   = $request->url;
       $partner->save();

       return redirect()->back()->with('success', 'You have add new partner');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
       $partner = Partner::find($id);
       return view('Partner.edit', compact('partner'));
    }


    public function update(Request $request, string $id)
    {
       $request->validate([
        'name' => 'nullable'
       ]);

       $partner         = Partner::find($id);
       $partner->name   = $request->name;
       if ($request->hasFile('logo')) {
        if ($partner->logo != null) {
                unlink(public_path('partner/'.$partner->logo));
        }
        $ext = $request->file('logo')->extension();
        $final_name = time().'-'.uniqid().'-'.'logo'.'.'.$ext;

        $request->file('logo')->move(public_path('partner/'), $final_name);

        $partner->logo = $final_name;
    }
       $partner->url    = $request->url;
       $partner->save();

       return redirect()->back()->with('success', 'You have add new partner');
    }

    public function destroy(string $id)
    {
       $partner = Partner::find($id);
       if ($partner->logo != null) {
                unlink(public_path('partner/'.$partner->logo));
        }
       $partner->delete();

       return redirect()->back()->with('success', 'You have deleted the partner');
    }
}
