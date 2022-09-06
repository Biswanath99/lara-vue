<?php

namespace App\UsersModel;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $fillable = ['name', 'email', 'address'];
}
