<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',['products'=>Product::get()]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);

       
        //upload image
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('products'),$imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = "hello";

        $product->save();

        return back()->withSuccess('Notes Created!!!');
    }

    public function edit($id){
       $product = Product::where('id',$id)->first();

       
       return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable'
        ]);

        $product = Product::where('id',$id)->first();



        if(isset($request->image)){
            //upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'),$imageName);
            $product->image = $imageName;
            

        }

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();

        return back()->withSuccess('Notes updated!!!');
    }
    public function destroy($id){
        $product = Product::where('id',$id)->first();
        $product->delete();
        return back();
    }
}
