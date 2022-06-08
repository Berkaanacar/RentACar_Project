<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'renter_id',
        'car_id',
        'start_date',
        'end_date',
        'total_price'
    ];
    public function getCars()
    {
        return $this->belongsTo(Cars::class, 'id', 'car_id');
    }
    public function getEmployee()
    {
        return $this->belongsTo(Employee::class, 'id', 'employee_id');
    }
    public function getRenter()
    {
        return $this->hasMany(Renter::class, 'id', 'renter_id');
    }
}
