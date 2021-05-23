<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buy extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function tickets(){
        return $this->belongsTo(ticket::class,'ticket_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
