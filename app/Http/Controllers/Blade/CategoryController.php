<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->get()->all();
        return view('pages.category.index', compact('categories'));
    }

    public function add()
    {
        $categories = Category::where('parent_id', 0)->get()->all();
        return view('pages.category.add', compact('categories'));
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
    

    public function edit($id)
    {
        $category = Category::where('id', $id)->get()->first();
        $categories = Category::where('parent_id', 0)->get()->all();
        return view('pages.category.edit', compact('category','categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->get()->first();
        if($category){
            $category->name = $request->get('name');
            $category->save();

            if($request->parent_id != $request->old_parent_id){
                $parentCategory = Category::where('id', $request->parent_id)->get()->first();
                $category->parent_id = $parentCategory->id;

                if ($request->hasFile('photo')) {
                    if ($category->photo) {
                        $imagePath = public_path('images/category/' . $category->photo);
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
        
                    $file = $request->file('photo');
                    $extension = $file->getClientOriginalExtension();
                    $name = time() . '.' . $extension;
        
                    $file->move(public_path('images/category'), $name);
        
                    $category->photo = $name;
                }
                $category->save();
            }else{
                $category->parent_id = $request->parent_id;
                if ($request->hasFile('photo')) {
                    if ($category->photo) {
                        $imagePath = public_path('images/category/parent/' . $category->photo);
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
        
                    $file = $request->file('photo');
                    $extension = $file->getClientOriginalExtension();
                    $name = time() . '.' . $extension;
        
                    $file->move(public_path('images/category/parent'), $name);
        
                    $category->photo = $name;
                }
                $category->save();
            }
            return redirect()->route('categoryIndex');
        }else{
            message_set("Data not found !",'error',1);
            return redirect()->route('categoryIndex');
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        message_set("Category deleted !",'success',1);
        return redirect()->back();
    }
}
