<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sub_product_test extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function product_test(){
        return $this->belongsTo(product_test::class , 'product_test_id' , 'id');
    }
}
