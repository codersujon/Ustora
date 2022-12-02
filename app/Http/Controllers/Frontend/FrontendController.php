<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Products;

class FrontendController extends Controller
{
    // Find All Active Products
    public function index(){
        $products = Products::where('status', 1)->get();
        return view("frontend.index", compact('products'));
    }

    // Find Single Product Details
    public function singleproduct($id){
        $singleP = Products::find($id);
        return view('frontend/single-product', compact('singleP'));
    }
}
