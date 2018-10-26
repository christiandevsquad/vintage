<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table="";
    protected $fillable = [
        'name', 'subName', 'price', 'detail', 'image', 'tag'
    ];
}
