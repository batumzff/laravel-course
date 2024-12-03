<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    use HasFactory;

    public $timesstamps = false;

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'car_id',
        'abs', 
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_start',
        'gps navigation',
        'heated seats',
        'climate control',
        'rear parking sensors',
        'leather seats',
    ];
        
}
