<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\board_list;
use App\question;
use App\result;

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
                                <input name="answer['.$query[$i]->id.']" value="1" type="radio" class="custom-control-input board_question" id="options'.$j.'1">
                                <label class="custom-control-label" for="options'.$j.'1">'.$query[$i]->option1.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="answer['.$query[$i]->id.']" value="2" type="radio" class="custom-control-input board_question" id="options'.$j.'2">
                                <label class="custom-control-label" for="options'.$j.'2">'.$query[$i]->option2.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="answer['.$query[$i]->id.']" value="3" type="radio" class="custom-control-input board_question" id="options'.$j.'3">
                                <label class="custom-control-label" for="options'.$j.'3">'.$query[$i]->option3.'</label>
                            </div>
                            </li>
                            <li>
                            <div class="custom-control custom-radio">
                                <input name="answer['.$query[$i]->id.']" value="4" type="radio" class="custom-control-input board_question" id="options'.$j.'4">
                                <label class="custom-control-label" for="options'.$j.'4">'.$query[$i]->option4.'</label>
                            </div>
                            </li>
                        </ul>
                    </div>';
        }
        return $data;
    }

    public function question_submit(Request $request)
    {
        Session::put('submit_search_questions',$request->answer);
        date_default_timezone_set('Asia/Dhaka');
        $right = 0;
        $wrong = 0;
        $total = 0;
        $correct_answer_question_id = array();
        $wrong_answer_question_id = array();
        foreach($request->answer as $option_num => $option_val){
            //  $myfile = fopen("file.txt", "a+") or die("Unable to open file!");
            //  fwrite($myfile,$option_num." ".$option_val."\n");
             $question = question::where('id',$option_num)->first();
             if ($question->correct_option == $option_val) {
                array_push($correct_answer_question_id,$question->id);
                $right = $right+1;
             }
             else {
                $wrong = $wrong+1;
                array_push($wrong_answer_question_id,$question->id);
             }
             $total = $total+1;
        }
       $result = result::create(['user_id'=>1,'total_question'=>$total,'correct_answer'=>$right,'wrong_answer'=>$wrong,'correct_answer_question_id'=>json_encode($correct_answer_question_id),'wrong_answer_question_id'=>json_encode($wrong_answer_question_id)]);
        // $result = result::find(1);
        return view('Questions.SubmitQuestion',['result'=>$result]);
    }

    public function correctanswers()
    {
        $data = Session::get('submit_search_questions');
        $array = array();
        foreach ($data as $key => $value) {
            $singleQuestion = question::where('id',$key)->first();
            array_push($array, $singleQuestion);
            //file_put_contents('test.txt',$singleQuestion);
        }

        return view('Questions.CorrectAnswers',['answers'=>$array]);
    }
}
