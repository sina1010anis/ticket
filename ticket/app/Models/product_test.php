<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_test extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'name';
    }
    public function sub_product_test(){
        return $this->hasMany(product_test::class , 'id' , 'product_test_id');
    }
}
