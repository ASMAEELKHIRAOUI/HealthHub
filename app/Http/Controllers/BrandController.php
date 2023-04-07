<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Http\Requests\StorebrandRequest;
use App\Http\Requests\UpdatebrandRequest;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands= Brand::all();
        return view('dashboard')->with('brands', $brands);
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
     * @param  \App\Http\Requests\StorebrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebrandRequest $request)
    {
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'img/';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = "$imageName";
        }
        Brand::create($input);
        

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        return view('dashboard',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebrandRequest  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebrandRequest $request, brand $brand)
    {
        $input = $request->all();
        if($image = $request->file('image')){
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move('img/', $imageName);
            $input['image'] = $imageName;
        }else unset($input['image']);
        $brand->update($input);
      
        return redirect()->route('dashboard')->with('success','Brand updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        $brand->delete();
       
        return redirect()->route('dashboard')->with('success','Brand deleted successfully');
    }
}
