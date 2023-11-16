<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        "vendor_id",
        "brand_id",
        "category_id",
        "fuel_id",
        "name",
        "year",
        "transmissions_type",
        "status",
        "price"
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    public function transactional()
    {
        return $this->hasOne(Transactional::class);
    }
}
