<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_Value extends Model
{
    use HasFactory;
    protected $table='property_values';
    protected $guarded=[];

    public function property()
    {
        return $this->belongsTo(Property::class,'property_id');
    }
}
