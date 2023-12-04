<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    // public function user()
    // {
    //    return $this->belongsTo(User::class, 'id', 'userId');
    // }

    public function order()
    {
       return $this->belongsTo(order::class, 'id', 'shipmentId');
    }

    protected $fillable = [
        'date',
        'address',
        'city',
        'state',
        'country',
        'postalCode',
        'userId',
        'phone',
        'lastName' ,
        'firstName',
        'note',
    ];
}
