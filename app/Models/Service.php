<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_description',
        'service_price',
        'service_duration',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function servicesBooked()
    {
        return $this->hasMany(ServiceBooked::class);
    }
}




