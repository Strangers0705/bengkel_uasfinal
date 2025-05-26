<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'vehicle_make',
        'vehicle_model',
        'year',
        'service_id',
        'preferred_date',
        'preferred_time',
        'description',
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'preferred_date' => 'date',
    ];

    /**
     * Get the service that owns the appointment.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}