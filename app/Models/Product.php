<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'cat_id',
        'sub_cat_id',
        'title',
       'single_img',
       'gallery',
       'description',
        'status',
        'show_home'
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }

    public function sub_category()
    {
        return $this->hasOne(SubCategory::class,'id','sub_cat_id');
    }

}
