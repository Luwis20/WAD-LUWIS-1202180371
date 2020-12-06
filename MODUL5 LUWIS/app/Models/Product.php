<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    
    public function getImage()
    {
        return asset('storage/' . $this->img_path);
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
