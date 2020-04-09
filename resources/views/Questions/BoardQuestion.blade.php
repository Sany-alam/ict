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
        <div class="search-box">
            <select class="select2" id="boardList">
                <option value="">Select Board & Year</option>
                @for ($i = 0; $i < count($board); $i++)
                <option value="{{ $board[$i]->id }}"> {{ $board[$i]->year }} {{ $board[$i]->board_name }} </option>
                @endfor
            </select>
            <button class="newsfeed-buttons" id="search-board-question">Search</button>
        </div>
        <!-- single mcq -->
        <div class="mcq-box">
            <div id="board-mcq"></div>
            <h3 id="board-mcq-no-data">Search question</h3>
        </div>
        <!-- test submit button -->
        <button class="test-submit-button" id="submit-board-question">Submit</button>
    </div>
@endsection
@section('page-js')
    {{-- board question page --}}
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    {{-- custom page js --}}
    <script src="{{ asset('assets\js\custom\board-question.js') }}"></script>
@endsection
