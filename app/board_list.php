<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board_list extends Model
{
    protected $fillable = [
        'board_name','year'
    ];

    public function question()
    {
        return $this->hasMany('App\question', 'board_id', 'id');
    }
}
