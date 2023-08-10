<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_access_type extends Model
{
    use HasFactory;
    protected $table = 'user_access_types';
    protected $fillable = ['user_id','user_access_id'];
}
