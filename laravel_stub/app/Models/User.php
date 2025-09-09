<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'userID';
    public $timestamps = false;

    protected $fillable = [
        'userName', 'userEmail', 'userPassword'
    ];
}

