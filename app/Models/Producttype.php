<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producttype extends Model
{
    use HasFactory;

    protected $table = "type_product";

    public function products(){
        return $this->hasMany('App\Products','','id');
    }
}
