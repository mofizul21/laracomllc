<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [];

    protected static function boot(){
            parent::boot();
    
            static::creating(function($category){
                $category->slug = Str::slug($category->name);
            });
        }

    public function parent_category(){
        return $this->belongsTo(__CLASS__);
    }

    public function child_category(){
        return $this->hasMany(Category::class);
    }public function fname(){
        
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}

