<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name','description','img','price','onsale'
    ];
}

