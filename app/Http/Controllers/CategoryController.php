<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController
{

    public function index()
    {
        $category=category::all();
        return view('admin.category',compact('category'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {

        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'image' => 'required',
        ]);
        $image=$request->file('image')->getClientOriginalName();
        $path= $request->file('image')->storeAs('categories',$image,'imges');
        category::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'image'=>$path
        ]);
        return back();
    }

    public function show(category $category)
    {
        //
    }
    public function edit(category $category)
    {
        
    }

    public function update(Request $request,$id)
    {
        $category = category::find($id);
        if($request->filled('image')){
        $image= $request->filled('image')->getClientOPrigpinalName();
        $path = $request->filled('image')->storeAs('categories', $image,'images');
        $category->image = $path;
        }
    
     if(!empty($request->name_en)){
        $category->name_en = $request->name_en;
     }

     if(!empty($request->name_ar)){
        $category->name_ar = $request->name_ar;
     }

     $category->save();

            return back();
    }

    public function destroy($id)
    {
        category::where('id',$id)->delete();
        return back();
    }
}