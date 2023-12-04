<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',  // Add any other attributes you want to include in mass assignment
        'email',
        'msg', // other attributes...
    ];
}
