<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductModelController extends Controller
{
    public function grid(){
        // $products = Products::whereHas('model', function ($query) use ($brandId, $modelId) {
        //     $query->where('brand_id', $brandId)->where('id', $modelId);
        // })->where('product_model_id', $product_modelId)->get();
    }

    public function getProductModels($brand_id)
    {
        $productModels = ProductModel::where('brand_id', $brand_id)->get();
        return response()->json($productModels);
    }


    public function index()
    {
        $productModels = ProductModel::with('brand')->get()->all();
        return view('pages.product_model.index', compact('productModels'));
    }

   
    public function add()
    {
        $brands = Brand::get()->all();
        $productModels = ProductModel::with('brand')->get();
        return view('pages.product_model.add', compact('productModels','brands'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,gif|max:2048'
        ]);

        // dd($request);
        $product_model = new ProductModel();
        $product_model->name = $request->get('name');
        $product_model->brand_id = $request->get('brand_id');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $name = time() . '.' . $extension;

            $file->move(public_path('images/product_model'), $name);
            $product_model->photo = $name;
        }

        $product_model->save();

        return redirect()->route('product_modelIndex');
    }
    

    public function edit($id)
    {
        $product_model = ProductModel::where('id', $id)->get()->first();
        $brands = Brand::get()->all();
        return view('pages.product_model.edit', compact('product_model','brands'));
    }

    public function update(Request $request, $id)
    {
        $product_model = ProductModel::where('id', $id)->get()->first();
        if($product_model){
            $product_model->name = $request->get('name');
            $product_model->save();

            if($request->brand_id != $request->old_brand_id){
                $parentproduct_model = ProductModel::where('id', $request->brand_id)->get()->first();
                $product_model->brand_id = $parentproduct_model->id;

                if ($request->hasFile('photo')) {
                    if ($product_model->photo) {
                        $imagePath = public_path('images/product_model/' . $product_model->photo);
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
        
                    $file = $request->file('photo');
                    $extension = $file->getClientOriginalExtension();
                    $name = time() . '.' . $extension;
        
                    $file->move(public_path('images/product_model'), $name);
        
                    $product_model->photo = $name;
                }
                $product_model->save();
            }else{
                $product_model->brand_id = $request->brand_id;
                if ($request->hasFile('photo')) {
                    if ($product_model->photo) {
                        $imagePath = public_path('images/product_model/parent/' . $product_model->photo);
                        if (file_exists($imagePath)) {
                            unlink($imagePath);
                        }
                    }
        
                    $file = $request->file('photo');
                    $extension = $file->getClientOriginalExtension();
                    $name = time() . '.' . $extension;
        
                    $file->move(public_path('images/product_model/parent'), $name);
        
                    $product_model->photo = $name;
                }
                $product_model->save();
            }
            return redirect()->route('product_modelIndex');
        }else{
            message_set("Data not found !",'error',1);
            return redirect()->route('product_modelIndex');
        }
    }

    public function destroy($id)
    {
        $product_model = ProductModel::find($id);
        $product_model->delete();
        message_set("product_model deleted !",'success',1);
        return redirect()->back();
    }
}
