<?php

namespace App\Pages;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //timestamps
    public $timestamps = false;
    protected $fillable = ['Id_Brand','BrandName'];
}
