<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements hasMedia
{
    use HasMediaTrait;
    use HasFactory;

    protected $guarded = [];

    public function category(){
        return $this->hasOne(Category::class);
    }
    protected static function boot(){
        parent::boot();

        static::creating(function($product){
            $product->slug = str_slug($product->title);
        });
    }
}
