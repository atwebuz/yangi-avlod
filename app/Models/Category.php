<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'name',
        'parent_id',
        'photo',
        'status',
    ];

    public function parent()
    {
        return $this->hasOne(Category::class,'id','parent_id');
    }
}
