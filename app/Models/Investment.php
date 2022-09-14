<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'business_id',
        'business_name',
        'wallet_id',
        'date_created',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }
}
