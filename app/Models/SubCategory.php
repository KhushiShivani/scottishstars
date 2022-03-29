<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $table = "sub_categories";

    protected $fillable = [
        'title',
        'slug',
        'cat_id',
        'description',
        'sort_order',
        'img_url',
        'status'
    ];

    public function category()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }
}
