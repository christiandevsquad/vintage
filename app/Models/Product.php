<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table="";

    protected $fillable = [
        'name', 'subName', 'price', 'description', 'tag'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
