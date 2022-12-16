<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Receiving;
use App\Models\ReceivingItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Image;
use File;

class ReceivingController extends Controller
{
    public function index()
    {
        $receivings = Receiving::orderBy('id', 'desc')->get();

        return view('admin.receivings.index', compact('receivings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'place' => ['required'],
            'note' => ['required'],
            'image' => ['required']
        ]);

        if($request->file('image'))
        {
            $dir = 'media/receivings/';
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
        
            $image = $dir . $fileName;
        }

        $receiving = Receiving::create([
            'user_id' => Auth::user()->id,
            'image' => $image,
            'place' => $request->place,
            'note' => $request->note,
        ]);

        if ($receiving) {
            return redirect()->route('admin.receivings.edit', $receiving)->with('success', 'Belanja barang berhasil dibuat, tambahkan item barang yang dibeli.');
        }else{
            return redirect()->back()->with('error', 'Belanja barang gagal dibuat!');
        }
    }

    public function show($id)
    {
        $receiving = Receiving::findOrFail($id);

        return view('admin.receivings.show', compact('receiving'));
    }

    public function invoice($id)
    {
        $receiving = Receiving::findOrFail($id);

        return view('admin.receivings.invoice', compact('receiving'));
    }

    public function edit($id)
    {
        $receiving = Receiving::findOrFail($id);
        $items = Item::all();

        return view('admin.receivings.edit', compact('receiving', 'items'));
    }
}
