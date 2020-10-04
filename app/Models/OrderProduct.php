<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    public $guarded = [];

    public $timestamps = false;

    public function order(){
        return $this->belongsTo(Order::class);
    }
}
