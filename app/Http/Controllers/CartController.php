<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use Illuminate\Support\Facades\Route;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $carts = Cart::all()->where('user_id',$user->id);
        $subtotal=0;
        $sum_items=0;
        foreach($carts as $cart){
            $subtotal += $cart->quantity * ($cart->product->price - (($cart->product->promotion * $cart->product->price)/100));
            $sum_items++;
        }
        if (Route::currentRouteName() == 'checkout'){
            return view('checkout')->with(['carts' => $carts, 'subtotal' => $subtotal, 'sum_items' => $sum_items, 'user' => $user]);
        }
        return view('cart')->with(['carts' => $carts, 'subtotal' => $subtotal, 'sum_items' => $sum_items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {
        $input = $request->all();
        Cart::create($input);
        

        return redirect()->route('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request)
    {
        $cart = Cart::find($request->id);

        $cart->quantity = $request->quantity;

        $cart->save();

        return response()->json(['updated' => $cart]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
}
