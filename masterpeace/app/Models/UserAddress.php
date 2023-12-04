<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    public function useraddress()
    {
       return $this->belongsTo(User::class, 'id', 'userId');
    }
    protected $fillable = [
        'addressLine1',
        'addressLine2',
        'city',
        'country',
        'postalCode',
        'phone',

    ];
}
