<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get()->all();
        return view('pages.brands.index',compact('brands'));
    }

    public function add()
    {
        return view('pages.brands.add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
    
        $brand = new Brand();
        $brand->name = $request->get('name');
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = time() . '.' . $extension;
    
            $file->move(public_path('images/brands'), $name);
    
            $brand->photo = $name;
        }
    
        $brand->save();
    
        return redirect()->route('brandIndex');
    }
    

    public function edit($id)
    {
        $brand = Brand::where('id', $id)->get()->first();
        return view('pages.brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id); 
        if ($brand) {
            $brand->name = $request->get('name');
    
            if ($request->hasFile('photo')) {
                if ($brand->photo) {
                    $imagePath = public_path('images/brands/' . $brand->photo);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
    
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $name = time() . '.' . $extension;
    
                $file->move(public_path('images/brands'), $name);
    
                $brand->photo = $name;
            }
    
            $brand->save();
            return redirect()->route('brandIndex');
        } else {
            message_set("Data not found!", 'error', 1);
            return redirect()->route('brandIndex');
        }
    }
    

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        message_set("Banner deleted !",'success',1);
        return redirect()->back();
    }

   
}
