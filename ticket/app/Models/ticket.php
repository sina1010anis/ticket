<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function cities_back()
    {
        return $this->belongsTo(city::class , 'city_id_back' ,'id');
    }

    public function cities_next()
    {
        return $this->belongsTo(city::class , 'city_id_next' ,'id');
    }
}
