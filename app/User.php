<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $fillable = [
        'name','phone','institute',
    ];

    public function results()
    {
        return $this->hasMany('App\result', 'user_id', 'id');
    }
}
