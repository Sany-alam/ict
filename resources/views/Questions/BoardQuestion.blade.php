@extends('app')
@section('title','Question')
@section('page-css')
    <!-- search question selects css -->
    <link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet">
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
        <div class="search-box">
            <select class="select2" id="board">
                <option value="">Select Board</option>
                <option value="NL">Nails</option>
                <option value="BN">Bananas</option>
                <option value="HL">Helicopters</option>
            </select>
            <select class="select2" id="year">
                <option value="">Slect Year</option>
                <option value="NL">Nails</option>
                <option value="BN">Bananas</option>
                <option value="HL">Helicopters</option>
            </select>
            <button class="newsfeed-buttons" style="margin-top: 10px;padding: 2px 10px 4px 10px;">Search</button>
        </div>
        <!-- single mcq -->
        <div class="mcq-box">
            @for ($i = 1; $i <= 10; $i++)
            <div class="single-mcq text-left">
                <h4 class="text-light-primary question">
                    <span class="question-no">{{$i}}</span>
                    <span class="question-mcq">Quen here?</span>
                </h4>
                <ul>
                    <li>
                    <div class="custom-control custom-radio">
                        <input name="question" type="radio" class="custom-control-input" id="options1/{{$i}}">
                        <label class="custom-control-label" for="options1/{{$i}}">Check this custom radio</label>
                        </div>
                    </li>
                    <li>
                    <div class="custom-control custom-radio">
                        <input name="question" type="radio" class="custom-control-input" id="options2/{{$i}}">
                        <label class="custom-control-label" for="options2/{{$i}}">Check this custom radio</label>
                    </div>
                    </li>
                    <li>
                    <div class="custom-control custom-radio">
                        <input name="question" type="radio" class="custom-control-input" id="options3/{{$i}}">
                        <label class="custom-control-label" for="options3/{{$i}}">Check this custom radio</label>
                    </div>
                    </li>
                    <li>
                    <div class="custom-control custom-radio">
                        <input name="question" type="radio" class="custom-control-input" id="options4/{{$i}}">
                        <label class="custom-control-label" for="options4/{{$i}}">Check this custom checkbox</label>
                    </div>
                    </li>
                </ul>
            </div>
            @endfor
        </div>
        <!-- test submit button -->
        <div class="text-right">
        <button class="test-submit-button">Submit</button>
        </div>
    </div>
@endsection
@section('page-js')
    {{-- board question page --}}
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    {{-- custom page js --}}
    <script src="{{ asset('assets\js\custom\board-question.js') }}"></script>
@endsection
