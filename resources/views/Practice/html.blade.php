@extends('app')
@section('page-custom-css')
    <style>
        #html-input{
            background-color: #464646;
            color: #ddd;
            margin: 0px 0px 10px 0px;
        }
        #html-output{
            padding: 10px;
            background-color: #dedede;
        }
    </style>
@endsection
@section('title','Study')
@section('content')


<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">HTML</a>
</div>
<!-- box body -->
<div class="page-body">
    <textarea class="form-control text-left" id='html-input' cols="7" rows="7"></textarea>
    <div class="text-left" id="html-output"></div>
    {{-- <textarea id="html-output" class="form-control text-left" cols="7" rows="7"></textarea> --}}
</div>
@endsection
@section('page-custom-js')
<script src="{{ asset('assets') }}/js/custom/html.js?{{ time() }}"></script>
@endsection

