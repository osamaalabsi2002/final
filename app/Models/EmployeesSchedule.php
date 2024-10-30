<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'day_id',
        'from_hour',
        'to_hour'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

