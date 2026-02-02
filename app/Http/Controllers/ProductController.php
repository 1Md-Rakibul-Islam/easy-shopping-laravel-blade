<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

    $data = Product::all();

        return view('pages.product.products', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }
}
