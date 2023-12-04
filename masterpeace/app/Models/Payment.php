<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['userId', 'status', 'provider', 'amount' ,'created_at' ,'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'userId');
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'id', 'paymentId');
    }
}
