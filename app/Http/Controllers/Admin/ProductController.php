<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $posts = Product::latest()->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create() 
    {
        return view('admin.products.create');
    }

    public function store(Request $request) 
    {
        Product::create(array_merge($request->only('title', 'description', 'body'),[
            'user_id' => auth()->id()
        ]));

        return redirect()->route('admin.products.index')
            ->withSuccess(__('Product created successfully.'));
    }

    public function show(Product $product) 
    {
        return view('admin.products.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product) 
    {
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product) 
    {
        $product->update($request->only('title', 'description', 'body'));

        return redirect()->route('admin.products.index')
            ->withSuccess(__('Product updated successfully.'));
    }

    public function destroy(Product $product) 
    {
        $product->delete();

        return redirect()->route('admin.products.index')
            ->withSuccess(__('Products deleted successfully.'));
    }
}
