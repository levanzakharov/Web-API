<?php

namespace App\Pages;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //timestamps
    protected $table = 'brand';
    public $timestamps = false;
    protected $fillable = ['Id_Brand','BrandName'];
}
