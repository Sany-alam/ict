<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    protected $fillable = [
        'chapter_id','topic_name'
    ];

    public function chapter()
    {
        return $this->belongsTo('App\chapter', 'chapter_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany('App\question', 'topic_id', 'id');
    }
}
