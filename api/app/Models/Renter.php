<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    use HasFactory;
    protected $fillable = [
        'info_id',
    ];
    public function getInfo()
    {
        return $this->belongsTo(Information::class, 'info_id', 'id');
    }
    public function getCars()
    {
        return $this->belongsTo(Cars::class, 'id', 'id');
    }
    public function getContract()
    {
        return $this->belongsTo(Contracts::class, 'id', 'renter_id');
    }
}
