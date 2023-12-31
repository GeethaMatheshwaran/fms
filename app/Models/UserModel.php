<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class UserModel extends Model
// {
//     use HasFactory;
// }

class UserModel extends Model
{
    protected $table = 'user_details';
    protected $primaryKey = 'id';
    protected $fillable = ['user_name', 'user_phone_no', 'user_email','user_password'];
}
