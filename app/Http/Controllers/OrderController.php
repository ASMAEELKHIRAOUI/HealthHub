<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Http\Requests\StoreorderRequest;
use App\Http\Requests\UpdateorderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders= Order::all();
        return view('dashboard')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreorderRequest $request)
    {
        $input = $request->all();

        Order::create($input);
        

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return view('dashboard',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateorderRequest  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateorderRequest $request, order $order)
    {
        $input = $request->all();
        $order->update($input);
      
        return redirect()->route('dashboard')->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        $order->delete();
       
        return redirect()->route('dashboard')->with('success','Order deleted successfully');
    }
}
