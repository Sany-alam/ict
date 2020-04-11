@extends('app')
@section('page-custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/c-compiler.css') }}">
@endsection
@section('title','Study')
@section('content')


<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">Study</a>
</div>
<!-- box body -->
<div class="page-body">
    <textarea class="form-control text-left compiler-textarea" cols="10" rows="10">#include <stdio.h>
void main()
{
    int i;
    printf("The first 10 natural numbers are:\n");
    for (i=1;i<=10;i++)
    {
        printf("%d ",i);
    }
printf("\n");
}</textarea>
    <input type="text" class="form-control" placeholder="কোড লিখুন">
    <div class="btn btn-light-primary button-compiler-box">
        <button class="btn-compiler-compile"><i class="anticon anticon-caret-right"></i> চালান</button>
        <button class="btn-compiler-compile" id="compiler-output-toggle"><i class="fas fa-angle-down"></i> কন্সোল লুকান</button>
    </div>
    <textarea id="compiler-output" class="form-control text-left compiler-textarea" cols="3" rows="3"></textarea>
</div>
@endsection
@section('page-custom-js')
<script>
    $(function() {
       $("#compiler-output-toggle").click(function() {
        $("button#compiler-output-toggle>i").toggleClass('fa-angle-up');
           $("#compiler-output").slideToggle();
       });
    });
</script>
@endsection
