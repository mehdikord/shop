<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='properties';
    protected $guarded=[];
    public function values()
    {
        return $this->hasMany(Property_Value::class,'property_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
