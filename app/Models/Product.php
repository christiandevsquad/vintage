<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name', 'subName', 'price', 'description', 'tag', 'deleted_at'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
