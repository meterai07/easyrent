<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmission extends Model
{
    use HasFactory;

    protected $fillable = [
        "transmissions_type"
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }
}
