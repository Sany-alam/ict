<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    protected $fillable = [
        'user_id','total_question','correct_answer','wrong_answer','correct_answer_question_id','wrong_answer_question_id'
    ];
}
