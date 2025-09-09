<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserHighscore extends Model
{
    protected $table = 'userhighscore';
    public $timestamps = false;
    protected $fillable = ['userid','highscore'];
}

