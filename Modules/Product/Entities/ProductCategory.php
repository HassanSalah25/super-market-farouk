<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'status',
        'image'
    ];
    // get title attribute with edits
    public function getTitleAttribute($value)
    {
        return $this->attributes['title'] = __($value);
    }


    public function subcategory()
    {
        return $this->hasMany(ProductSubCategory::class, 'category_id', 'id');
    }

    function product()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
