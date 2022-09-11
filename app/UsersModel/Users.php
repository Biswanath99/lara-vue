<?php

namespace App\UsersModel;
use App\AddressModel\Address;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table 
    protected $table = 'user';
    //Input field validation
    protected $fillable = ['name', 'email'];

    public function get_address()
    {
        return $this->belongsTo(Address::class,'addressId');    //model name , fk name , local or primary key name (optional)
    }
}
