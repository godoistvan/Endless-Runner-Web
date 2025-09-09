<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table = 'ranks';
    public $timestamps = false;
    protected $fillable = ['userid','rankid'];

    public function achievable()
    {
        return $this->belongsTo(AchievableRank::class, 'rankid', 'id');
    }
}

