<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'phone',
        'tc_no'
    ];
    public function getCars()
    {
        return $this->belongsTo(Cars::class, 'id', 'id');
    }
    public function getRenterInfo()
    {
        return $this->hasOne(Renter::class, 'id', 'info_id');
    }
    public function getEmployee()
    {
        return $this->hasOne(Employee::class, 'id', 'info_id');
    }
}
