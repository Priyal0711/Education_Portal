<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access_type extends Model
{
    use HasFactory;
    protected $table = 'user_access';

    public function user_data()
    {
        return $this->hasMany(Userdata::class);
    }
}
