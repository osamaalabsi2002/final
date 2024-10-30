<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_created',
      
        'employee_id',
        'user_id',
        'start_time',
        'end_time_expected',
        'canceled',
        'cancellation_reason',
        'status',
        'total_price'  
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public $timestamps = false;

    public function servicesBooked()
    {
        return $this->hasMany(ServiceBooked::class);
    }
    public function user()
{
    return $this->belongsTo(User::class);
}
}

