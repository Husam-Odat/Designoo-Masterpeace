<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::class, 'id', 'discountId');
    }
    protected $fillable = [
        'name',
        'description',
        'discountPercent',
        'active',
        'img'

    ];
}
