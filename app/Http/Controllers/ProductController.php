<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\SearchRequest;
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

        if (Route::currentRouteName() == 'welcome'){
            return view('welcome')->with('products', $products);
        }
        return view('product.index')->with('products', $products);
    }

    public function details(product $product)
    {
        $user = Auth::user();
        return view('product.details',compact('product','user'));
    }

    public function filterCategory($filter){

        $product=Product::join("categories","categories.id","=","products.category_id")
                          ->where("categories.name","=",$filter)->select("products.*")->get();
        
        return view('welcome')->with('products', $product);
  
    }

    public function search(SearchRequest $request)
    {
        $search = $request->input('search'); // Get the search keyword from the request
// dd($search);
        // Use Eloquent to query the products table for name or description containing the search keyword
        $products = Product::where('name', 'LIKE', '%' . $search . '%')
                        ->orWhere('description', 'LIKE', '%' . $search . '%')
                        ->select("products.*")
                        ->get();
        // return $products;
        // Pass the search results to the view
        return view('welcome')->with('products', $products);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.index');
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
        

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return view('product.index',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        return view('product.edit', ['product' => $product]);
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
      
        return redirect()->route('product.index')->with('success','Product updated successfully');
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
    
        return redirect()->route('product.index')->with('success','Product deleted successfully');
    }
}
