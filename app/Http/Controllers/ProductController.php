<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $user = Auth::user();

        if (Route::currentRouteName() == 'welcome'){
            return view('welcome')->with('products', $products);
        }
        return view('products')->with('products', $products);
    }

    public function details(product $product)
    {
        $user = Auth::user();
        return view('details',compact('product','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductRequest $request)
    {
        $input = $request->all();

        // dd($request['img']);

        if ($image = $input['img']) {
            $destinationPath = 'img/products';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['img'] = "$imageName";
        }
        Product::create($input);
        

        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('products',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('productsedit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductRequest  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $input = $request->all();
        if($image = $request->file('image')){
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move('img/products', $imageName);
            $input['image'] = $imageName;
        }else unset($input['image']);
        $product->update($input);
      
        return redirect()->route('products')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        $product->delete();
    
        return redirect()->route('products')->with('success','Product deleted successfully');
    }
}
