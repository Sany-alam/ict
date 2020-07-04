<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = [
        'topic_id','question','board_id','option1','option2','option3','option4','correct_option','tag','details'
    ];

    public function topic(){
        return $this->belongsTo('App\Topic','topic_id','id');
    }

    public function board_list(){
        return $this->belongsTo('App\board_list','board_id','id');
    }
}
