<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price'
    ];
    public function getCars()
    {
        return $this->hasMany(Cars::class, 'id', 'brand_id');
    }
}
