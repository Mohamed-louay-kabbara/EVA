<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\shoes;
use App\Models\orders;
use App\Models\category;
class usersController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::where('role',2)->get();
        return view('Admin.users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(auth()->user()->role==2){
        $category=category::get();
    return view('homePage',compact('category'));}
    if(auth()->user()->role==1){
        $category=category::count();
        $users=User::count()-1;
        $shoes=shoes::count();
        $orders=orders::count();
    return view('Admin',compact('category','users','shoes','orders'));}
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        User::where('id',$id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id',$id)->delete();
        return back();
    }
}
