<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactional extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'vehicle_id',
        'rent_date',
        'rent_period',
        'total_payment',
        'payment_status'
    ];

    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }
}
