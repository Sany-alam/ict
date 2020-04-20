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
            <a href="#">১.৪.১ এক-এর পরিপূরক</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p>ঋণাত্মক সংখ্যা তৈরির জন্য ১-এর পরিপূরক (1's complement) গঠন ব্যবহার করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="">কোনো বাইনারি সংখ্যার প্রতিটি বিট কে 0 এর স্থানে 1 এবং 1 এর স্থানে 0 বসিয়ে দিলে সেটি ১-এর পরিপূরকে পরিনত হয়।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.1/sp52.png" alt="">
                  <p>১-এর পরিপূরক করলে যে কোনো ধনাত্মক সংখ্যা ঋনাত্মক সংখ্যা পরিনত হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">১-এর পরিপূরকে সমস্যা</p><hr>
                  <p class="">কিন্তু ১-এর পরিপূরক গঠনে শূন্যের জন্য দুটি মান (+0 এবং -0) তৈরি করা সম্ভব।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.1/sp53.png" alt="">
                  <p class="">এটি অসম্ভব! তাই কম্পিউটারে এ গঠন পদ্ধতি ব্যবহার করা হয় না।</p>
              </div>
              <div class="topic-parts-imp">
                  <p class="">কোনো বাইনারি সংখ্যার ধনাত্মক মান থেকেই শুধুমাত্র ১-এর পরিপূরক তৈরি করা সম্ভব। ১-এর পরিপূরক সংখ্যাটি সবসময় ঋনাত্মকই হবে। কারণ ঋনাত্মক মান তৈরি করতেই ১-এর পরিপূরক ব্যবহার করা হয়। ধনাত্মক সংখ্যার ১-এর পরিপূরক তাই সম্ভব নয়।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>

              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-10') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-12') }}"><i class="fa fa-arrow-right"></i></a>
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
