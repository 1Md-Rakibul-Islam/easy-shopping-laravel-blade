<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {

        $data = $request->validated();

        // Handle image upload
        if($request->hasFile('image')) {
            // Store image in public/products directory
            $imagePath = request()->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        Product::create($data);

        return redirect()
        ->route('dashboard.products.index')
        ->with('success', 'Product created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, Product $product)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
        if ($product->image && Storage::exists($product->image)) {
            Storage::delete($product->image);
        }
        $data['image'] = $request->file('image')->store('products');
        }

            $product->update($data);

    return redirect()
        ->route('dashboard.products.index')
        ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('dashboard.products.index')
            ->with('success', 'Product deleted successfully');
    }
}
