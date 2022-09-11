<?php

namespace App\AddressModel;
use App\UsersModel\Users;


use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     //Table 
     protected $table = 'userAddress';
     //Input field validation
     protected $fillable = ['name', 'email'];

     public function get_user()
     {
         return $this->hasMany(Users::class);
     }
}
