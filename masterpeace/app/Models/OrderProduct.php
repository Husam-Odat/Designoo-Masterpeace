<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
  use HasFactory;
  protected $fillable = ['productId', 'quantity', 'price', 'orderId'];

  public function product()
  {
    return $this->belongsTo(Product::class, 'productId');
  }
  public function order()
  {

    return $this->belongsTo(Order::class, 'orderId');
  }
}
