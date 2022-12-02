<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Products;
use Image;
use File;


class ProductsController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function store(Request $request)
    { 
        if ($request->image) {
            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path("backend/img/". $customName);
            Image::make($image)->save($location);
        } 

        $product = new Products;
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->image = $customName;
        $product->status = $request->status;
        $product->save();
        return redirect()->route("showproducts");
        // dd( $product); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = Products::all();
        return view("backend/products/manage", compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $findProduct = Products::find($id);
        return view('backend/products/update', compact('findProduct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->image) {
            $image = $request->file('image');
            $customName = rand() . "." . $image->getClientOriginalExtension();
            $location = public_path("backend/img/". $customName);
            Image::make($image)->save($location);
        } 

        $findProduct =  Products::find($id);
        $findProduct->name = $request->name;
        $findProduct->category_name = $request->category_name;
        $findProduct->brand_name = $request->brand_name;
        $findProduct->description = $request->description;
        $findProduct->image = $customName;
        $findProduct->status = $request->status;
        $findProduct->update();
        return redirect()->route("showproducts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Products::find($id);
        $delete->delete();
        return back();
    }
}
