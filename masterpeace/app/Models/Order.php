<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
    'userId',
    'quantity',
    'total',
    'paymentId',
    'orderProductId',
    'shipmentId',

  ];
  use HasFactory;


  public function user()
  {
    return  $this->belongsTo(User::class, 'id', 'userId');
  }
  public function shipment()
  {
    return $this->belongsTo(Shipment::class, 'id', 'shipmentId');
  }
  public function payment()
  {
    return $this->belongsTo(Payment::class, 'id', 'paymentId');
  }
  public function orderproducts()
  {
    return $this->hasMany(OrderProduct::class, 'orderId');
  }
}
