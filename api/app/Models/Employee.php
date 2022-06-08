<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'info_id',
    ];
    public function getInfo()
    {
        return $this->belongsTo(Information::class, 'info_id', 'id');
    }
    public function getContract()
    {
        return $this->hasMany(Contracts::class, 'employee_id', 'id');
    }
}
