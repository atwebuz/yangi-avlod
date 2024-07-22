<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name', 'description', 'region_id', 'category_id', 'product_model_id',
        'status', 'hit', 'recommended', 'new', 'promotion'
    ];

    

    public function productModel()
    {
        return $this->belongsTo(ProductModel::class);
    }

    



    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }

    public function setPrice($newPrice)
    {
        $this->prices()->create(['price' => $newPrice]);
        $this->update(['current_price' => $newPrice]);
    }

    public function images()
    {
        return $this->morphMany(ProductImage::class, 'imageable');
    }

    public function getCurrentPriceAttribute()
    {
        return $this->prices()->latest()->value('price');
    }

    public function public_path():string
    {
        return public_path()."/images/";
    }

    public function path():string
    {
        return "/images/".$this->photo;
    }

    public function absolute_path():string
    {
        return public_path().'/images/'.$this->photo;
    }

    public function remove()
    {
        # Delete all releated thins to product

        \Illuminate\Support\Facades\File::delete($this->absolute_path());
        return $this->delete();
    }

    // public function region()
    // {
    //     return $this->hasOne(Regions::class,'id', 'region_id');
    // }
    public function region()
    {
        return $this->belongsTo(Regions::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
