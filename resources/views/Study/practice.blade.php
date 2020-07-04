@extends('app')
@section('title','Question')
@section('page-css')
    <!-- search question selects css -->
    <link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet">
@endsection
@section('page-custom-css')
    <link rel="stylesheet" href="{{ asset('assets\css\custom\boardquestion.css') }}">
@endsection
@section('content')

<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">Test</a>
    </div>
    <!-- box body -->
    <div class="page-body">
        <!-- single mcq -->
        <div class="mcq-box">
        <form action="{{ url('question_submit') }}" method="POST">
               @csrf
            <div id="board-mcq">
                @foreach ($chapter->topics as $topic)
                    @foreach ($topic->questions as $question)
                        <div class="single-mcq text-left">
                            <h4 class="text-light-primary question">
                                <span class="question-no">{{$question->id}}</span>
                                <span class="question-mcq">{{$question->question}}</span>
                            </h4>
                            <ul>
                                <li>
                                <div class="custom-control custom-radio">
                                    <input name="answer[{{$question->id}}]" value="1" type="radio" class="custom-control-input board_question" id="options{{$question->id}}1">
                                    <label class="custom-control-label" for="options{{$question->id}}1">{{$question->option1}}</label>
                                </div>
                                </li>
                                <li>
                                <div class="custom-control custom-radio">
                                    <input name="answer[{{$question->id}}]" value="2" type="radio" class="custom-control-input board_question" id="options{{$question->id}}2">
                                    <label class="custom-control-label" for="options{{$question->id}}2">{{$question->option2}}</label>
                                </div>
                                </li>
                                <li>
                                <div class="custom-control custom-radio">
                                    <input name="answer[{{$question->id}}]" value="3" type="radio" class="custom-control-input board_question" id="options{{$question->id}}3">
                                    <label class="custom-control-label" for="options{{$question->id}}3">{{$question->option3}}</label>
                                </div>
                                </li>
                                <li>
                                <div class="custom-control custom-radio">
                                    <input name="answer[{{$question->id}}]" value="4" type="radio" class="custom-control-input board_question" id="options{{$question->id}}4">
                                    <label class="custom-control-label" for="options{{$question->id}}4">{{$question->option4}}</label>
                                </div>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
        <!-- test submit button -->
        <button class="test-submit-button mb-2" type="submit">Submit</button>
        </form>
    </div>
@endsection
@section('page-js')
    {{-- board question page --}}
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
@endsection
@section('page-custom-js')
    {{-- custom page js --}}
    <script src="{{ asset('assets\js\custom\board-question.js') }}"></script>
@endsection
