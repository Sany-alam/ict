@extends('app')
@section('title','Question')
@section('page-css')
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
    <a href="#">Correct answers</a>
</div>
<!-- box body -->
<div class="page-body">
    <div class="mcq-box">
        @foreach($answers as $key => $value)
        <div class="single-mcq text-left">
            <h4 class="text-light-primary question">
                <span class="question-no">{{ $value->id }}</span>
                <span class="question-mcq">{{ $value->question }}</span>
            </h4>
            <ul>
                @for($i=1;$i<5;$i++)
                <li>
                    <div class="custom-control custom-radio">
                        @if($value->correct_option == $i)
                        <input name="{{ $value->id }}" value="{{ $i }}" type="radio" class="custom-control-input board_question" checked="true">
                        @else
                        <input name="{{ $value->id }}" value="{{ $i }}" type="radio" class="custom-control-input board_question" checked="false">
                        @endif
                        <label class="custom-control-label">{{ $value->option1 }}</label>
                    </div>
                </li>
                @endfor
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('page-js')
@endsection
@section('page-custom-js')
<script type="text/javascript">
    // $("#")
</script>
@endsection
