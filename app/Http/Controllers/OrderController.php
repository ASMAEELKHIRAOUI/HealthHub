<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\Cart;
use App\Models\OrderItems;
use Illuminate\Support\Facades\Auth;
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
        return view('orders')->with('orders', $orders);
    }

    public function details(Order $order)
    {
        return view('orderdetails',compact('order'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders');
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


        $order=Order::create($input);

        $userId = Auth::user()->id;
        $cartItems = Cart::where('user_id', $userId)
            ->with('product')
            ->get()
            ->toArray();
        //     return $cartItems;
        
        $orderId = $order->id;

        for($i = 0; $i < count($cartItems); $i++)
        {
            $total= $cartItems[$i]['quantity'] * ($cartItems[$i]['product']['price'] - (($cartItems[$i]['product']['promotion'] * $cartItems[$i]['product']['price'])/100));
            OrderItems::create([
                'order_id' => $orderId,
                'product_id' => $cartItems[$i]['product_id'],
                'quantity' => $cartItems[$i]['quantity'],
                'total' => $total,
            ]);
        }
// return 'fghjk'; 
        Cart::where('user_id', $userId)->delete();

        // return 'kolchi tchera';
        return redirect()->route('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        return view('orders',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        $userId = Auth::user()->id;
        return view('orderedit', ['order' => $order, 'userId' => $userId]);
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
      
        return redirect()->route('orders')->with('success','Order updated successfully');
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
       
        return redirect()->route('orders')->with('success','Order deleted successfully');
    }
}
