<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    protected $fillable = [
        'chapter_name'
    ];

    public function topics()
    {
        return $this->hasMany('App\topic', 'chapter_id', 'id');
    }
}
