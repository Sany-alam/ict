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
            <a href="#">৩.৪.১ NOR গেইট ব্যবহার করে মৌলিক গেইট নির্ণয়</a>
          </div>
          <!-- box body -->
          <div class="page-body">
             <div class="topic-parts-imp">
                <p class="question text-light-primary">NOR gate দিয়ে NOT gate</p><hr>
                <p>NOR এর ইনপুট গুলোকে একত্র করে দিলেই NOT গেইট তৈরি হয়।</p>
              </div>
              <div class="topic-parts">
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo8.MP4" type="video/mp4"></video>
                <br><br>
                <p>এটি যে NOT গেইট এর মত কাজ করবে তা নিশ্চিত হওয়ার জন্য নিচে সত্যক সারণি দেয়া হলঃ</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.4.1/lg1.png" alt="">
              </div>

            <div class="topic-parts">
              <p class="question text-light-primary">NOR gate দিয়ে OR gate</p><hr>
              <p>	NOR তৈরি হয় OR এর সাথে NOT যুক্ত করে। আমরা জানি পর পর দুটো NOT দিলে আবার আগের মান পাওয়া যায়ঃ
              <br>A=0 হলে <span>A</span> = 1, একে আবার NOT করা হলে হবেঃ <span>A</span> = 0 ।<br>OR গেইটের সাধারন ফাংশন হলঃ F = A + B</p>
              <p>একে নিচের মত সরল করে লিখা যায়ঃ</p>
              <p><b>ধাপ সমূহ</b></p>
              <img class="col-sm-12 col-md-10 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.4.1/lg2.png" alt="">
              <p>এ থেকে বুঝা যায় যে, NOR গেইট <span>( A + B )</span> এর সাথে একটি NOT গেইট যুক্ত করে দিলে এটি OR গেইটের কাজ করবে।</p>
              <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo9.MP4" type="video/mp4"></video>
            </div>

            <div class="topic-parts">
                <p class="question text-light-primary">NOR gate দিয়ে AND gate</p><hr>
                <p>দুটি ইনপুটের জন্য AND এর সাধারণ ফাংশন হলঃ F = A . B</p>
                <p>উপরের ফাংশনটিকে নিচে সরল করা হলঃ</p>
                <p><b>ধাপ সমূহ</b></p>
                <img class="col-sm-12 col-md-10 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.4.1/lg3.png" alt="">
                <p>উপরের ফাংশনটিকে এবার NOR গেইট দিয়ে সহজে বাস্তবায়ন করা যাবে। নিচে লজিক ফাংশনটির NOR দিয়ে বাস্তবায়ন দেখানো হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo10.MP4" type="video/mp4"></video>
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