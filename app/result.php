<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $fillable = [
        'user_id','total_question','correct_answer','wrong_answer','correct_answer_question_id','wrong_answer_question_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\user', 'user_id', 'id');
    }
}
