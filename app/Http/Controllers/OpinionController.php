<?php

namespace App\Http\Controllers;

use App\Models\opinion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index()
    {
        return view('evalution')     ;
    }

    public function index1()
    {
        $evalution=opinion::all();
        return view('admin.opinion',compact('evalution'));
    }

    public function create()
    {        
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        
        opinion::create([
        'number'=>$id,
        'user_id'=>Auth::id()
        ]);
    return redirect()->route('dashboard');
    }

    public function edit(opinion $opinion)
    {
    }

    public function update(Request $request, opinion $opinion)
    {
    }

    public function destroy($id)
    {
        opinion::where('id',$id)->delete();
        return back();
    }
}