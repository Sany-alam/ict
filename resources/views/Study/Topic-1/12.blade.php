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
            <a href="#">১.৪.২ দুই-এর পরিপূরক</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p>ঋণাত্মক সংখ্যা তৈরির জন্য ২-এর পরিপূরক (2's complement) গঠন ব্যবহার করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="">কোনো বাইনারি সংখ্যাকে শুরুতে ১-এর পরিপূরক গঠন তৈরি করে তার সাথে 1 যোগ করলে ২-এর পরিপূরক গঠন তৈরি হয়।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2/sp53.png" alt="">
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">সাধারণ নিয়ম এবং ১-এর পরিপূরকের সমস্যার সমাধান</p><hr>
                  <p class="">২-এর পরিপূরক গঠনে শূন্যের জন্য দুটি মান (+0 এবং -0) তৈরি করা সম্ভব নয়।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2/sp54.png" alt="">
                  <p class="">তাই কম্পিউটারে এ গঠন পদ্ধতি ব্যবহার করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">২-এর পরিপূরক সংখ্যার আসল মান বের করা</p><hr>
                  <p class="">২-এর পরিপূরক গঠন শুধূমাত্র ঋনাত্মক সংখ্যার জন্য প্রযোজ্য। ২ এর পরিপূরক গঠন থেকে সংখ্যাটির আসল মান বের করতে সংখ্যাটিকে আগের মতই আবার ১-এর পরিপূরক গঠন করে 1 যোগ করতে হয়। অর্থাৎ ২-এর পরিপূরক গঠনের আসল মান বের করতে তাকে আবার ২-এর পরিপূরক করতে হয়, তাহলে মান পাওয়া যায়।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2/sp55.png" alt="">
                  <p class="">উপরে (11110100)<sub>2</sub> বাইনারি সংখ্যাটি ২-এর পরিপূরকে আছে। ফলে আমরা বলতে পারি সংখ্যাটি অবশ্যই ঋনাত্মক। এখন আমরা সংখ্যাটিকে ১-এর পরিপূরক করে তার সাথে 1 যোগ করলে পেলাম (00001100)<sub>2</sub> অর্থাৎ (12)<sub>10</sub>, সুতরাং (11110100)<sub>2</sub> সংখ্যাটির মান (-12)<sub>10</sub></p>
              </div>
              <div class="topic-parts-imp">
                  <p class="">কোনো বাইনারি সংখ্যার ধনাত্মক মান থেকেই শুধুমাত্র ২-এর পরিপূরক তৈরি করা সম্ভব। ২-এর পরিপূরক সংখ্যাটি সবসময় ঋনাত্মকই হবে। কারণ ঋনাত্মক মান তৈরি করতেই ২-এর পরিপূরক ব্যবহার করা হয়। ধনাত্মক সংখ্যার ২-এর পরিপূরক তাই সম্ভব নয়।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-11') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-13') }}"><i class="fa fa-arrow-right"></i></a>
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
