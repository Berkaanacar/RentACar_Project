<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_id',
        'plaque'
    ];
    public function getBrands()
    {
        return $this->belongsTo(Brands::class, 'id', 'brand_id');
    }
    // public function getInformation()
    // {
    //     return $this->hasOne(Information::class, 'id', 'id');
    // }
    public function getContracts()
    {
        return $this->hasMany(Contracts::class, 'id', 'car_id');
    }
    public function getRenter()
    {
        return $this->hasOne(Renter::class, 'id', 'id');
    }
}
