<?php

namespace App\Http\Controllers;

use App\Models\shoes;
use App\Models\category;
use Illuminate\Http\Request;

class ShoesController
{

    public function index()
    {
        $shoes=shoes::all();
        $category=category::all();

        return view('admin.product',compact('shoes','category'));
    }
    public function create(Request $request)
    {
        $shoses=shoes::where('CategoryId',$request->id_category)->get();
        $name_category=category::where('id',$request->id_category)->first();
        return view('show_shoses',compact('shoses','name_category'));
    }

    public function store(Request $request)
    {
        $request->validate([    
            'price' => 'required',
            'color' => 'required',
            'size' => 'required',
            'CategoryId' => 'required',
            'cont' => 'required',
            'model' => 'required',
            'image'=>'required'
        ]);

        $image=$request->file('image')->getClientOriginalName();
        $path= $request->file('image')->storeAs('categories',$image,'imges');
        shoes::create([
        'CategoryId'=>$request->CategoryId,
        'price'=>$request->price,
        'color'=>$request->color,
        'size'=>$request->size,
        'cont'=>$request->cont,
        'model'=>$request->model,
        'image'=>$path
    ]);
    return back();
    }

    public function show($id)
    {
    }
    public function edit(shoes $shoes)
    {
        
    }

    public function update(Request $request,$id)
    {
    $shoes = shoes::find($id);
    if($request->filled('image')){
        $image= $request->filled('image')->getClientOPrigpinalName();
        $path = $request->filled('image')->storeAs('categories', $image,'images');
        $shoes->image = $path;
    
        }
     if(!empty($request->price)){
        $shoes->price = $request->price;
     }

     if(!empty($request->color)){
        $shoes->color = $request->color;
     }

     if(!empty($request->size)){
        $shoes->size = $request->size;
     }

     if(!empty($request->cont)){
        $shoes->cont = $request->cont;
     }

     if(!empty($request->model)){
        $shoes->model = $request->model;
     }

     $shoes->save();
    return back();
    }
    public function destroy($id)
    {
        shoes::where('id',$id)->delete();
        return back();

    }
}
