<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemFilter extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function titleFilters()
    {
        return $this->belongsTo(titleFilter::class,'title_filter_id','id');
    }
}
