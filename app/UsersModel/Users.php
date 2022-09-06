<?php

namespace App\UsersModel;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //Table 
    protected $table = 'user';
    //Input field validation
    protected $fillable = ['name', 'email', 'address'];
}
