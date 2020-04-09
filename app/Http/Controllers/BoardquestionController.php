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
            $j = $i+1;
            $data .='<div class="single-mcq text-left">
                        <h4 class="text-light-primary question">
                            <span class="question-no">'.$j.'</span>
                            <span class="question-mcq">'.$query[$i]->question.'</span>
                        </h4>
                        <ul>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question'.$j.'" type="radio" class="custom-control-input board_question" id="options'.$j.'1">
                                <label class="custom-control-label" for="options'.$j.'1">'.$query[$i]->option1.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question'.$j.'" type="radio" class="custom-control-input board_question" id="options'.$j.'2">
                                <label class="custom-control-label" for="options'.$j.'2">'.$query[$i]->option2.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question'.$j.'" type="radio" class="custom-control-input board_question" id="options'.$j.'3">
                                <label class="custom-control-label" for="options'.$j.'3">'.$query[$i]->option3.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="question'.$j.'" type="radio" class="custom-control-input board_question" id="options'.$j.'4">
                                <label class="custom-control-label" for="options'.$j.'4">'.$query[$i]->option4.'</label>
                            </div>
                            </li>
                        </ul>
                    </div>';
        }
        return $data;
    }
}
