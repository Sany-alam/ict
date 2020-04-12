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
        <h2 class="text-center text-light-primary">Your result is</h2>
        <p class="text-center">Right answer {{ $result->correct_answer }} And wrong answer {{ $result->wrong_answer }}</p>
        <p class="text-center">Total answer {{ $result->total_question }}</p>


    </div>
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
