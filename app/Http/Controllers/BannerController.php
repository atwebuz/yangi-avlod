<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::get()->all();
        return view('pages.banners.index',compact('banners'));
    }

    public function add()
    {
        return view('pages.banners.add');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);
    
        $banner = new Banner();
        $banner->name = $request->get('name');
        $banner->description = $request->get('description');
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = time() . '.' . $extension;
    
            $file->move(public_path('images/banners'), $name);
    
            $banner->photo = $name;
        }
    
        $banner->save();
    
        return redirect()->route('bannerIndex');
    }
    

    public function edit($id)
    {
        $banner = Banner::where('id', $id)->get()->first();
        return view('pages.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id); 
        if ($banner) {
            $banner->name = $request->get('name');
            $banner->description = $request->get('description');
    
            if ($request->hasFile('photo')) {
                if ($banner->photo) {
                    $imagePath = public_path('images/banners/' . $banner->photo);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
    
                $file = $request->file('photo');
                $extension = $file->getClientOriginalExtension();
                $name = time() . '.' . $extension;
    
                $file->move(public_path('images/banners'), $name);
    
                $banner->photo = $name;
            }
    
            $banner->save();
            return redirect()->route('bannerIndex');
        } else {
            message_set("Data not found!", 'error', 1);
            return redirect()->route('bannerIndex');
        }
    }
    

    public function destroy($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        message_set("Banner deleted !",'success',1);
        return redirect()->back();
    }

    public function toggleblogActivation($id)
    {
        $banner = Banner::where('id',$id)->first();
        $banner->is_active = $banner->is_active === 1 ? 2 : 1;
        $banner->save();
        return [
            'is_active' => $banner->is_active
        ];
    }
}
