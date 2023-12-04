<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;

   public function useraddress()
   {
      return $this->hasMany(UserAddress::class, 'id', 'userId');
   }
   public function userpayment()
   {
      return $this->hasMany(UserPayment::class, 'id', 'userId');
   }
   public function payment()
   {
      return $this->hasMany(Payment::class, 'id', 'userId');
   }
   public function shipment()
   {
      return $this->hasMany(Shipment::class, 'id', 'userId');
   }
   // public function reviews()
   // {
   //    return $this->hasMany(Review::class, 'userId');
   // }
   public function review()
   {
      return $this->hasMany(Review::class, 'userId');
   }
   public function wishlist()
   {
      return $this->hasMany(WishList::class, 'id', 'userId');
   }
   public function sessioncart()
   {
      return $this->hasMany(SessionCart::class, 'id', 'userId');
   }
   public function order()
   {
      return $this->hasMany(Order::class, 'id', 'userId');
   }

   /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
   protected $fillable = [
      'username',
      'name',
      'lastName',
      'phone',
      'img',
      'role',
      'email',
      'country',
      'state',
      'city',
      'postalCode',
      'address',
      'password',
   ];


   /**
    * The attributes that should be hidden for serialization.
    *
    * @var array<int, string>
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];


   /**
    * The attributes that should be cast.
    *
    * @var array<string, string>
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
   ];
}
