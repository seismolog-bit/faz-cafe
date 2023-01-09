<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class ProductController extends Controller
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function index(Request $request)
    {

        if(!$request->category || !$request->order_by)
        {
            return redirect()->route('products.index', ['category' => 1, 'order_by' => 'name']);
        }

        $products = Product::where(['category_id' => $request->category, 'archive' => 0]);

        if ($request->order_by == 'asc') {
            $products = $products->orderBy('id', 'asc');
        }

        if($request->order_by == 'name')
        {
            $products = $products->orderBy('name', 'asc');
        }

        return view('public.products.index', [
            'products' => $products->get(),
            'categories' => ProductCategory::all(),
            'category_id' => $request->category
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $relates = Product::where('category_id', $product->category_id)->take(6)->get();

        return view('public.products.show', [
            'product' => $product,
            'relates' => $relates
        ]);
    }

    public function search(Request $request)
    {
        return view('public.products.search', [
            'products' => Product::where('archive', 0)
                ->where('name', 'like', "%".$request->search."%")
                ->get()
        ]);
    }
}
