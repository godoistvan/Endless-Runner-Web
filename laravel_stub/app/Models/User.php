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

    public function highscore()
    {
        return $this->hasOne(UserHighscore::class, 'userid', 'userID');
    }

    public function elo()
    {
        return $this->hasOne(Elo::class, 'userid', 'userID');
    }

    public function rank()
    {
        return $this->hasOne(Rank::class, 'userid', 'userID');
    }
}
