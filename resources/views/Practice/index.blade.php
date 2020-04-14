@extends('app')
@section('page-custom-css')
    <style>
        .page-shadow{
            background: #f7f7f7;
            padding: 30px 0px;
        }
        .page-body {
            background-color: #ffffff!important;
            padding: 15px 15px;
            border-radius: 5px;
        }
        .page-shadow .row{
            width: 80%;
            margin: auto;
        }
        .box-link img{
            width: 140px;
            height: auto;
        }
    </style>
@endsection
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
              <div class="page-shadow">
                  <div class="container">
                    <div class="row w-70 m-auto">
                        <div class="col-md-4">
                            <a title="C" href="{{ url('practice/c_compiler')}}" class="box-link">
                                <img src="{{asset('assets/images/icons/c.jpeg')}}" alt="C">
                                <h3>C</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a title="HTML" href="" class="box-link">
                                <img src="{{asset('assets/images/icons/html.jpeg')}}" alt="html">
                                <h3>HTML</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a title="SQL" href="" class="box-link">
                                <img src="{{asset('assets/images/icons/sql.jpeg')}}" alt="sql">
                                <h3>SQL</h3>
                            </a>
                        </div>
                    </div>
                  </div>
              </div>
              {{-- <a href="{{ url('practice/c_compiler')}}">Go to C-compiler</a> --}}
          </div>
@endsection
