<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
       
        $product = Product::latest()->paginate(10);
        return view('Product.index',compact('product'));
    }
    
    public function create()
    {
        return view('Product.create');
    }

    public function store(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',
        ]);
        if ($request->hasFile('feature_image')) {
            $ext = $request->file('feature_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'feature_image'.'.'.$ext;
            $request->file('feature_image')->move(public_path('uploads/'), $final_name);
            $product->feature_image = $final_name;
    }

        if ($request->hasFile('image') && $request->image != null) {
            $ext = $request->file('image')->extension();
            $final_name = time().'-'.uniqid().'-'.'product'.'.'.$ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $product->image = $final_name;
        }

        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('product.index');
    }

    

    
    public function edit($id)
    {  
        $product = Product::findOrFail($id);
        return view('Product.edit', compact('product'));
    }

   


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|string',
            'image' => 'image|mimes:jpeg,gif,png,jpg',
            'description' =>  'required|string',

        ]);
        if ($request->hasFile('feature_image') && $request->feature_image != null) {
            if ($product->feature_image != null) {
            unlink(public_path('uploads/'.$product->feature_image));
           }
            $ext = $request->file('feature_image')->extension();
            $final_name = time().'-'.uniqid().'-'.'product'.'.'.$ext;

         $request->file('feature_image')->move(public_path('uploads/'), $final_name);

             $product->feature_image = $final_name;
         }

        if ($request->hasFile('image') && $request->image != null) {
                    if ($product->image != null) {
                    unlink(public_path('uploads/'.$product->image));
                   }
                    $ext = $request->file('image')->extension();
                    $final_name = time().'-'.uniqid().'-'.'product'.'.'.$ext;
        
                 $request->file('image')->move(public_path('uploads/'), $final_name);
        
                     $product->image = $final_name;
                 }

        $product->name = $request->name;
        $product->amount = $request->amount;
        $product->description = $request->description;
        $product->update();
        return redirect()->route('product.index');
    }




    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->feature_image != null) {
            unlink(public_path('uploads/'.$product->feature_image));
        }
        if ($product->image != null) {
            unlink(public_path('uploads/'.$product->image));
        }

        $product->delete();

        return redirect()->back()->with('delete','product has been Deleted successfully');
    }
}
