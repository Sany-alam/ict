@extends('app')
@section('title','Question')
@section('page-css')
@endsection
@section('page-custom-css')
    <link rel="stylesheet" href="{{ asset('assets\css\custom\ResultBoardQuestion.css') }}">
@endsection
@section('content')

<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">Scoreboard</a>
</div>
    <!-- box body -->
<div class="page-body">
    <div class="shadow-box">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <p>Total answer</p>
                    <span>{{ $result->total_question }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box shadow">
                    <p>Right answer</p>
                    <span>{{ $result->correct_answer }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box shadow">
                    <p>Wrong answer</p>
                    <span>{{ $result->wrong_answer }}</span>
                </div>
            </div>
        </div>
        <a href="CorrectAnswers"><button class="view-answer-button">View answer</button></a>
        
    </div>
</div>
@endsection
@section('page-js')
@endsection
@section('page-custom-js')
@endsection
