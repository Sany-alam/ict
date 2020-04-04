<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\board_list;
use App\question;

class BoardquestionController extends Controller
{
    public function index()
    {
        $data = board_list::get();
        return view('Questions.BoardQuestion',['board'=>$data]);
    }

    public function show($id)
    {
        $query = question::where('board_id','=',$id)->get();
        $data = '';
        for ($i=0; $i < sizeof($query); $i++)
        {
            $data .='<div class="single-mcq text-left">
                        <h4 class="text-light-primary question">
                            <span class="question-no">'.$i.'</span>
                            <span class="question-mcq">'.$query[$i]->question.'</span>
                        </h4>
                        <ul>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question" type="radio" class="custom-control-input" id="options1/{{$i}}">
                                <label class="custom-control-label" for="options1/{{$i}}">'.$query[$i]->option1.'</label>
                                </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question" type="radio" class="custom-control-input" id="options2/{{$i}}">
                                <label class="custom-control-label" for="options2/{{$i}}">'.$query[$i]->option2.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question" type="radio" class="custom-control-input" id="options3/{{$i}}">
                                <label class="custom-control-label" for="options3/{{$i}}">'.$query[$i]->option3.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question" type="radio" class="custom-control-input" id="options4/{{$i}}">
                                <label class="custom-control-label" for="options4/{{$i}}">'.$query[$i]->option4.'</label>
                            </div>
                            </li>
                        </ul>
                    </div>';
        }
        return $data;
    }
}
