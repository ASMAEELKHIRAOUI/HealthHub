<?php

namespace App\Http\Controllers;

use App\Models\OrderItems;
use App\Http\Requests\StoreOrderItemsRequest;
use App\Http\Requests\UpdateOrderItemsRequest;

class OrderItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderItemsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function show(OrderItems $orderItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItems $orderItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderItemsRequest  $request
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderItemsRequest $request, OrderItems $orderItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItems  $orderItems
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderItems $orderItems)
    {
        //
    }
}
