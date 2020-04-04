<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    public function board()
    {
        return $this->hasOne('App\board_list', 'board_id', 'id');
    }

    public function topic()
    {
        return $this->hasOne('App\topic', 'topic_id', 'id');
    }
}
