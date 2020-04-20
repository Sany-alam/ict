<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- required css files -->
    <!-- bootstrap css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- required javascripts -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script> 
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <title>Document</title>
</head>
<body>
  <!-- body background opacity -->
  <div class="body-back-opacity">
    <!-- navbar start -->
    <nav class="navbar navbar-expand-md navbar-dark bg-nav fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">ICT logo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColapseItems" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColapseItems">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Logout</a>
                </li>
              </ul>
          </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- body section start -->
    <!-- <div class="body-background"> -->
    <div class="body-background-opacity">
      <div class="container">

        <!-- box contents -->
        <div class="page-content text-center">
          
          <!-- box title bar-->
          <div class="page-title">
            <!-- back button -->
            <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
            <!-- box title -->
            <a href="#">৩.১ মৌলিক লজিক গেইট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
            <div class="topic-parts-imp">
                <p class="question text-light-primary">OR gate</p><hr>
                <p>OR gate এর দুই বা দুয়ের অধিক ইনপুট এবং একটি আউটপুট থাকে। যে কোনো একটি ইনপুট 1 হলেই আউটপুট 1 হয়।</p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি OR gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo1.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য OR gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.1/lg1.png" alt="">
                <p>উপরের সত্যক সারণি থেকে বলা যায় OR গেইটের যে কোনো একটি ইনপুট 1 হলেই আউটপুট 1 হবে।</p>

              </div>

              <div class="topic-parts-imp">
                <p class="question text-light-primary">AND gate</p><hr>
                <p>AND gate এর দুই বা দুয়ের অধিক ইনপুট এবং একটি আউটপুট থাকে। সব গুলো ইনপুট 1 হলেই আউটপুট 1 হয়।</p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি AND gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo2.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য AND gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.1/lg2.png" alt="">
                <p>উপরের সত্যক সারণি থেকে বলা যায় AND গেইটের সব গুলো ইনপুট 1 হলেই আউটপুট 1 হবে। </p>
              </div>

              <div class="topic-parts-imp">
                <p class="question text-light-primary">NOT gate</p><hr>
                <p>NOT gate এর শুধুমাত্র একটি ইনপুট এবং একটি আউটপুট থাকে। এটি ইনপুটকে উল্টে দেয়, অর্থাৎ 0 ইনপুট দিলে আউটপুট আসবে 1 এবং 1 ইনপুট দিলে আউটপুট আসবে 0।</p>
              </div>
              <div class="topic-parts">  
                <p>নিচে একটি NOT gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo3.MP4" type="video/mp4"></video>
                <br><br>
                <p>NOT gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.1/lg3.png" alt="">
                <p>উপরের সত্যাক সারণি থেকে দেখা যাচ্ছে NOT গেইটে যা ইনপুট দেয়া হবে তার বিপরিত বিট আউটপুট আসবে।</p>

              </div>


              <div class="topic-arrow-buttons">
                  <div class="topic-back">
                    <button>
                        <i class="fa fa-arrow-left"></i>
                    </button>
                  </div>
                  <div class="topic-next">
                    <button>
                        <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
              </div>
          </div>
        </div>
      </div>

    </div>
    <!-- </div> -->
    <!-- body section end -->
  </div>

</body>
</html>