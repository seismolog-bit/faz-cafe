<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use File;
use Image;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = ProductCategory::all();

        return view('admin.product-cateogies', compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'image' => ['required', 'max:2048'],
            'detail' => ['required'],
        ]);

        $category = $request->all();

        if($request->file('image'))
        {
            $dir = 'media/category/';
            $url = $request->file('image');
            $extension = strtolower($url->getClientOriginalExtension()); // get file extension
            $fileName = time() . '.' . $extension; // rename file
        
            // image resize
            $imgFile = Image::make($url->getRealPath());
            $imgFile->resize(180, null, function ($constraint) {
              $constraint->aspectRatio();
            })->save($dir . $fileName);
            // $destinationPath = public_path($dir);
            // $url->move($destinationPath, $fileName);
        
            $category['image'] = $dir . $fileName;
        }

        ProductCategory::create($category);

        return redirect()->back()->with('success', 'Kategori produk berhasil di buat.');
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'detail' => ['required'],
        ]);

        $category = ProductCategory::findOrFail($id);

        // dd($category);

        if($request->file('image'))
        {
            $dir = 'media/category/';
            $url = $request->file('image');
            $extension = strtolower($url->getClientOriginalExtension()); // get file extension
            $fileName = time() . '.' . $extension; // rename file
        
            // image resize
            $imgFile = Image::make($url->getRealPath());
            $imgFile->resize(180, null, function ($constraint) {
              $constraint->aspectRatio();
            })->save($dir . $fileName);
            // $destinationPath = public_path($dir);
            // $url->move($destinationPath, $fileName);
            
            if (File::exists($category->image)) {
                File::delete($category->image);
            }
            
            $category['image'] = $dir . $fileName;
        }

        $category->name = $request->name;
        $category->detail = $request->detail;

        $category->save();

        return redirect()->back()->with('success', 'Kategori produk berhasil di perbarui.');
    }
    public function destroy($category){
        $category = ProductCategory::findOrFail($category);
        // dd($category);
        $category->delete();

        return redirect()->route('admin.product-categories.index')
            ->withSuccess(__('Kategori produk berhasil dihapus.'));
    }
}
