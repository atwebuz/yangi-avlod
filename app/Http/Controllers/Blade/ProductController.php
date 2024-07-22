<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Regions;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::with(['region', 'images'])->get();
        return view('pages.products.index', compact('products'));
    }
    
    public function add()
    {
        $regions = Regions::get()->all();
        $categories = Category::where('parent_id', 1)->get()->all();
        $brands = Brand::get()->all();
        $productModels = ProductModel::with('brand')->get()->all();


        return view('pages.products.add', compact('regions','categories','brands','productModels'));
    }
    public function create(Request $request)
    {
        // Create a new product
        $product = new Products();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->region_id = $request->get('region_id');
        $product->category_id = $request->get('category_id');
        $product->product_model_id = $request->get('product_model_id');
        
        $product->hit = $request->get('hit') ? true : false;
        $product->recommended = $request->get('recommended') ? true : false;
        $product->new = $request->get('new') ? true : false;
        $product->promotion = $request->get('promotion') ? true : false;
    
        $product->save();
    
        // Check if images are uploaded
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for the image
                $name = time() . '_' . $image->getClientOriginalName();
                
                // Move the image to the public/images/product_images directory
                $image->move(public_path('images/product_images'), $name);
                
                // Save the image path to the database
                $productImage = new ProductImage();
                $productImage->path = 'images/product_images/' . $name;
                $product->images()->save($productImage); 
            }
        }
      
        return redirect()->route('productIndex');
    }
    
    
    public function edit($id)
    {
        $product = Products::where('id', $id)->get()->first();
        $regions = Regions::get()->all();
        $categories = Category::where('parent_id', 1)->get()->all();
        $brands = Brand::get()->all();
        $productModels = ProductModel::with('brand')->get()->all();
        return view('pages.products.edit', compact('product', 'regions','categories','brands','productModels'));
    }

   
    public function update(Request $request, $id)
{
    // Find the existing product
    $product = Products::findOrFail($id);
    $product->name = $request->get('name');
    $product->description = $request->get('description');
    $product->region_id = $request->get('region_id');
    $product->category_id = $request->get('category_id');
    $product->product_model_id = $request->get('product_model_id');
    
    $product->hit = $request->get('attribute') == 'hit';
    $product->recommended = $request->get('attribute') == 'recommended';
    $product->new = $request->get('attribute') == 'new';
    $product->promotion = $request->get('attribute') == 'promotion';

    $product->save();

    // Check if images are uploaded
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = time() . '_' . $image->getClientOriginalName();
            
            $image->move(public_path('images/product_images'), $name);
            
            $productImage = new ProductImage();
            $productImage->path = 'images/product_images/' . $name;
            $product->images()->save($productImage); 
        }
    }

    return redirect()->route('productIndex');
}


    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        message_set("product deleted !",'success',1);
        return redirect()->back();
    }

    public function toggleProductActivation($id)
    {
        $product = Products::where('id',$id)->first();
        $product->status = $product->status === 1 ? 2 : 1;
        $product->save();
        return [
            'is_active' => $product->status
        ];
    }

    // For setting new price
    // public function updatePrice($productId, $newPrice)
    // {
    //     $product = Product::findOrFail($productId);
    //     $product->setPrice($newPrice);

    // }
}
