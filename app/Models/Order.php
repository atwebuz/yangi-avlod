<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'company_name',
        'email',
        'phoner',
        'stir',
        'status'
    ];

    public function files()
    {
        $this->hasMany(File::class);
    }
}
