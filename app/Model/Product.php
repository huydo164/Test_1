<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey  = 'product_id';
    public $timestamps = false;
    protected $fillable = [
        'product_name',
        'product_description',
        'price',
    ];
}
