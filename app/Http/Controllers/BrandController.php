<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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
        $brands = Brand::all();
        return view('brand.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.index');
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

        if ($image = $request->file('img')) {
            $destinationPath = 'img/brands';
            $imageName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['img'] = "$imageName";
        }
        Brand::create($input);


        return redirect()->route('brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        return view('brand.index', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit', ['brand' => $brand]);
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
        if ($image = $request->file('img')) {
            $imageName = date('YmdHis') . '.' . $image->getClientOriginalExtension();
            $image->move('img/brands', $imageName);
            $input['img'] = $imageName;
        } else unset($input['img']);
        $brand->update($input);

        return redirect()->route('brand.index')->with('success', 'Brand updated successfully');
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

        return redirect()->route('brand.index')->with('success', 'Brand deleted successfully');
    }
}
