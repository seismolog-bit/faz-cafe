<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use Image;
use File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = ProductCategory::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            // 'duration' => ['required'],
            'image' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required']
        ]);

        $product = $request->all();

        if ($request->file('image')) {
            // upload image 
            $dir = 'media/product/';
            $url = $request->file('image');
            $extension = strtolower($url->getClientOriginalExtension()); // get file extension
            $fileName = time() . '.' . $extension; // rename file

            // image resize
            $imgFile = Image::make($url->getRealPath());
            $imgFile->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save($dir . $fileName);
            $destinationPath = public_path($dir);
            $url->move($destinationPath, $fileName);

            $product['image'] = $dir . $fileName;
        }

        // dd($request);

        $product = Product::create($product);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil dibuat');
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
        $product = Product::findOrFail($product->id);

        $product->archive = !$product->archive;

        $product->save();

        return redirect()->route('admin.products.index')
            ->withSuccess(__('Status produk berhasil diubah.'));
    }
}
