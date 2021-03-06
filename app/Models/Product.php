<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    public $guarded = [];

    protected static function boot(){
        parent::boot();

        static::creating(function($product){
            $product->slug = Str::slug($product->title);
        });
    }

    public function category(){
        return $this->hasOne(Category::class);
    }
}
