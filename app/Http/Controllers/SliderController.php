<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('sliders.index', compact('sliders'));
    }


    public function create()
    {
        return view('sliders.create');
    }


    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'des' => 'nullable|string',
            'image' => 'required|image|max:2048', // max 2MB
        ]);
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->des = $request->des;
        if ($request->hasFile('image')) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'slider'.'.'.$ext;

            $request->file('image')->move(public_path('slider/'), $final_name);

            $slider->image = $final_name;
        }
        $slider->save();

        return redirect()->route('sliders.index')->with('success', 'Slider created successfully.');
    }



    public function edit(string $id)
    {
         $slider = Slider::find($id);
        return view('sliders.edit', compact('slider'));
    }


    public function update(Request $request, string $id)
    {
       // Validate form data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'des' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // max 2MB
        ]);



        // Update slider properties
        $slider = Slider::find($id);
        $slider->title = $request->title;
        $slider->des = $request->des;

        if ($request->hasFile('image')) {
            if ($slider->image != null) {
                    unlink(public_path('slider/'.$slider->image));
            }
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'slider'.'.'.$ext;

            $request->file('image')->move(public_path('slider/'), $final_name);

            $slider->image = $final_name;
        }

        $slider->save();

        return redirect()->route('sliders.index')
            ->with('success', 'Slider updated successfully.');
    }


    public function destroy(string $id)
    {
        $slider = Slider::find($id);
      // Delete image file
       if ($slider->image != null) {
                unlink(public_path('slider/'.$slider->image));
        }
        $slider->delete();

        return redirect()->route('sliders.index')
            ->with('success', 'Slider deleted successfully.');
    }
}
