@extends('app')
@section('title','Question')
@section('page-css')
@endsection
@section('page-custom-css')
    <link rel="stylesheet" href="{{ asset('assets\css\custom\boardquestion.css') }}">
    <style type="text/css">
        .right_answer:checked~.custom-control-label::before {
            color: #7ac943;
            border-color: #7ac943;
            background-color: #7ac943;
        }
    </style>
@endsection
@section('content')

<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">Correct answers</a>
</div>
<!-- box body -->
<div class="page-body">
    <div class="mcq-box">
            @php
                $j = 1;
            @endphp
        @foreach($answers as $value)

        <div class="single-mcq text-left">
            <h4 class="text-light-primary question">
                <span class="question-no">{{ $j++ }}</span>
                <span class="question-mcq">{{ $value->question }}</span>
            </h4>
            <ul>
                @for($i=1;$i<5;$i++)
                    @if('value="'.$i.'"' == 'value="'.$value->correct_option.'"')
                    <li>
                        <div class="custom-control custom-radio">
                            <input name="answer{{ $value->id }}" value="{{$i}}" type="radio" class="custom-control-input board_question right_answer" id="options{{ $value->id }}{{$i}}" checked="true">
                            <label class="custom-control-label" for="options{{ $value->id }}{{$i}}">{{ $value->{'option'.$i} }}</label>
                        </div>
                    </li>
                    @else
                    <li>
                        <div class="custom-control custom-radio">
                            <input name="answer{{ $value->id }}" value="{{$i}}" type="radio" class="custom-control-input board_question wrong_answer" id="options{{ $value->id }}{{$i}}" disabled>
                            <label class="custom-control-label" for="options{{ $value->id }}{{$i}}">{{ $value->{'option'.$i} }}</label>
                        </div>
                    </li>
                    @endif
                @endfor
            </ul>
            @if(!empty($value->details))
            <p class="text-light-primary text-left">ব্যাখ্যাঃ {{ $value->details }}</p>
            @endif
        </div>

        @endforeach
    </div>
</div>
@endsection
@section('page-js')
@endsection
@section('page-custom-js')
@endsection
