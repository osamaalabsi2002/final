<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'employee_id',
        'image',
    ];




    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}



