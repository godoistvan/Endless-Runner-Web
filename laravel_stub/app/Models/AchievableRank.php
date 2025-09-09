<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AchievableRank extends Model
{
    protected $table = 'achievableranks';
    public $timestamps = false;
    protected $fillable = ['rank'];
}

