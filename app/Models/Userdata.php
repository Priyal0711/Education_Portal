<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    use HasFactory;

    protected $table = 'userdatas';
    protected $fillable = ['first_name','last_name','email','state','user_name','password'];

    public function access_type()
    {
        return $this->belongsTo(Access_type::class);
    }

    public function user_access_type()
    {
        return $this->hasOne(UserAccessType::class);
    }
}