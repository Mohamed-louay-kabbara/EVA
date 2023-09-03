<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\shoes;

class OrdersController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=orders::get();
        return view('admin.order',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $total=0;
      $my_order=orders::where('user_id',Auth::id())->get();
      foreach($my_order as $t){
        $total+=$t->shose->price;
      }
        return view('buy_basket',compact('my_order','total'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'shose_id' => 'required',
            'address' => 'required',
        ]);
     orders::create([
        'user_id'=>Auth::id(),
        'shose_id'=>$request->shose_id,
        'type_delivery'=>'توصيل',
         'address'=>$request->address]);
    $count=DB::table('shoes')->where('id',$request->shose_id)->first();
     DB::table('shoes')->where('id',$count->id)->update(['cont'=>$count->cont-1]);
    return redirect()->route('orders.create');
    }
    public function show($id)
    {

    }
    public function edit(orders $orders)
    {
        //
    }
    public function Add($id)
    {
        orders::create([
            'user_id'=>Auth::id(),
            'shose_id'=>$id,
            'type_delivery'=>'عادي'
    ]);
    $count=DB::table('shoes')->where('id',$id)->first();
    DB::table('shoes')->where('id',$count->id)->update(['cont'=>$count->cont-1]);
    return redirect()->route('orders.create');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        orders::where('id',$id)->delete();
        return back();
    }
}
