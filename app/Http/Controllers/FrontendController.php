<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        
        return view('frontend.pages.home');
    }
    public function about(){
        return view('frontend.pages.about');
    }
    public function investoram_premushastva(){
        return view('frontend.pages.investoram.premushastva');
    }
    public function investoram_registratsiya_rezidentov(){
        return view('frontend.pages.investoram.registratsiya_rezidentov');
    }
    public function investoram_nalogovie_preferensi(){
        return view('frontend.pages.investoram.nalogovie_preferensi');
    }
    public function investoram_podderjka_eksportov(){
        return view('frontend.pages.investoram.podderjka_exportov');
    }
    public function normativnie_documenti(){
        return view('frontend.pages.normativnie-documenti');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }

    
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // 'parent_id' => 'nullable|exists:categories,id',
            'photo' => 'nullable|image|mimes:jpeg,png,gif|max:2048'
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->parent_id = $request->get('parent_id', 0);
        $category->status = 1; // Default status

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = time() . '.' . $extension;

            $file->move(public_path('images/category'), $name);
            $category->photo = $name;
        }

        $category->save();

        return redirect()->route('categoryIndex');
    }
    

}
