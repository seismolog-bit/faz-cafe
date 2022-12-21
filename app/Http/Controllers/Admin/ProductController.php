<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use Image;
use File;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);

        $products = Product::orderBy('category_id', 'asc')->orderBy('name', 'asc')->get();

        // dd($request->category);

        if ($request->category) {
            $products = $products->where('category_id', $request->category);
        }

        return view('admin.products.index', [
            'products' => $products,
            'product_count' => Product::all()
        ]);
    }

    public function create()
    {
        $categories = ProductCategory::all();
        $items = Item::all();

        return view('admin.products.create', compact('categories', 'items'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
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
            $imgFile->resize(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($dir . $fileName);
            $destinationPath = public_path($dir);
            $url->move($destinationPath, $fileName);

            $product['image'] = $dir . $fileName;
        }

        $product = Product::create($product);

        return redirect()->route('admin.products.index')->withToastSuccess('success', 'Produk berhasil dibuat');
    }

    public function show(Product $product)
    {
        return view('admin.products.show', [
            'product' => $product
        ]);
    }

    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        $items = Item::all();

        return view('admin.products.edit', [
            'product' => $product,
            'items' => $items,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required'],
            'price' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required']
        ]);

        if ($product) {
            $image = $product->image;
        }else{
            $image = null;
        }

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

            if ($product) {
                if (File::exists($product->image)) {
                    File::delete($product->image);
                }
            }

            $image = $dir . $fileName;
        }

        Product::updateOrCreate(
            [ 'id' => $product->id ],
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'item_id' => $request->item_id,
                'duration' => $request->duration ?? 0,
                'detail' => $request->detail,
                'image' =>  $image,
            ]
        );

        return redirect()->route('admin.products.index')
            ->withSuccess(__('Product updated successfully.'));
    }

    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);

        // $product->archive = !$product->archive;

        $product->delete();

        return redirect()->route('admin.products.index')
            ->withToastSuccess('Produk berhasil dihapus');
    }
}
