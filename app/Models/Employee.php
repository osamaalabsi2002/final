<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone_number', 
        'email', 
        'description', 
        'image'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function schedule()
    {
        return $this->hasOne(EmployeesSchedule::class);
    }



    public function works()
{
    return $this->hasMany(Work::class);
}

public function comments()
{
    return $this->hasMany(Comment::class);
}

}
