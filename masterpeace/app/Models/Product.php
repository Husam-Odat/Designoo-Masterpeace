<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use HasFactory;

   public function productcategory()
   {
      // return $this->hasMany(ProductCategory::class, 'id', 'productId');
      return $this->belongsTo(ProductCategory::class, 'categoryId', 'id');
   }
   public function productinventory()
   {
      // return  $this->hasMany(ProductInventory::class, 'id', 'productId');
      return $this->belongsTo(ProductInventory::class, 'inventoryId', 'id');
   }
   public function review()
   {
      return $this->hasMany(Review::class, 'id', 'productId');
   }
   public function orderproduct()
   {
      return $this->hasMany(OrderProduct::class, 'productId');
   }
   //  public function discount()
   //  {
   //     return $this->hasMany(Discount::class, 'id', 'productId');
   //  }
   public function discount()
   {
      return $this->belongsTo(Discount::class, 'discountId', 'id');
   }

   public function cart()
   {
      return $this->hasMany(cart::class);
   }
   public function wishlist()
   {
      return $this->hasMany(WishList::class, 'id', 'productId');
   }

   protected $fillable = [

      'name',
      'description',
      'SKU',
      'categoryId',
      'img',
      'img1',
      'img2',
      'img3',
      'inventoryId',
      'discountId',
      'price',
      'weight'

   ];

   // public function orderProduct()
   // {
   //    return $this->hasMany(OrderProduct::class, 'id', 'productId');
   // }
}
