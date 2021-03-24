<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    protected $fillable = ['name', 'brand', 'ingredients', 'quantity', 'description', 'use', 'price', 'img_url'];
}
