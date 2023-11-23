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
        'name',
        'phone_number',
        'address',
        'city',
        'pick_up_date',
        'pick_up_location',
        'pick_up_time',
        'drop_off_date',
        'drop_off_location',
        'drop_off_time',
        'total_payment',
        'payment_status',
    ];

    public function tenant() {
        return $this->belongsTo(Tenant::class);
    }

    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }
}
