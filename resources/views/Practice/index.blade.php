@extends('app')
@section('title','Practice')
@section('content')


 <!-- box title bar-->
 <div class="page-title">
            <!-- back button -->
            <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
            <!-- box title -->
            <a href="#">Practice</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <a href="{{ url('practice/c_compiler')}}">Go to C-compiler</a>
          </div>


@endsection
