@extends('app')
@section('title','Question')
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
        <div class="single-mcq text-left">
            <h4 class="text-light-primary question">
                <span class="question-no">1</span>
                <span class="question-mcq">Quen here?</span>
            </h4>
            <ul>
                <li>
                <div class="custom-control custom-checkbox">
                    <input name="checkbox" type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Check this custom checkbox</label>
                    </div>
                </li>
                <li>
                <div class="custom-control custom-checkbox">
                    <input name="checkbox" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                </div>
                </li>
                <li>
                <div class="custom-control custom-checkbox">
                    <input name="checkbox" type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">Check this custom checkbox</label>
                </div>
                </li>
                <li>
                <div class="custom-control custom-checkbox">
                    <input name="checkbox" type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">Check this custom checkbox</label>
                </div>
                </li>
            </ul>
        </div>
        <!-- test submit button -->
        <div class="text-right">
        <button class="test-submit-button">Submit</button>
        </div>
    </div>
@endsection