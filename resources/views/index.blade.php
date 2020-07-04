
@extends('app')
@section('title','ICT')
@section('home-active','active')
@section('content')
<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"></a>
    <!-- <i class="fa fa-arrow-left"></i> -->
    <!-- box title -->
    <a href="#">Dashboard</a>
</div>
    <!-- box body -->
<div class="page-body">
    <div class="row dashboard-contents">
        <div class="col-md-3">
            <a href="{{ url('Study') }}">
            <div class="button">
                <img src="{{ asset('assets') }}/images/icons/study.png" alt="" class="img-fluid">
                <h3>Study</h3>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('Newsfeed') }}">
            <div class="button">
                <img src="{{ asset('assets') }}/images/icons/newsfeed.png" alt="" class="img-fluid">
            <h3>Newsfeed</h3>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('practice') }}">
            <div class="button">
                <img src="{{ asset('assets') }}/images/icons/practise.png" alt="" class="img-fluid">
            <h3>Practice</h3>
            </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{ url('board-questions') }}">
            <div class="button">
                <img src="{{ asset('assets') }}/images/icons/boardquestion.png" alt="" class="img-fluid">
            <h3>Previews questions</h3>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection
