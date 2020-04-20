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
            <a href="#">১.৪ চিহ্ন যুক্ত সংখ্যা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
                  <p class="">সব ধরনের সংখ্যাকে দুই ভাগে ভাগ করা হয়। ধনাত্মক সংখ্যা এবং ঋনাত্মক সংখ্যা।</p>
                  <p class="">কম্পিউটার যেহেতু 0 এবং 1 ছাড়া কিছু বুঝে না, তাই কম্পিউটারকে ধনাত্মক এবং ঋনাত্মক সংখ্যা বুঝানোর জন্য একটি bit বরাদ্দ করা থাকে। এ বরাদ্দকৃত bit কে sign bit বলে।</p>
                  <p class="">ধনাত্মক সংখ্যা বুঝাতে sign bit 0 এবং ঋনাত্মক বুঝাতে sign bit 1 ব্যবহার করা হয়।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4/sp51.png" alt="">
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">n's complement</p><hr>
                  <p class="">বাইনারিতে ধনাত্মক সংখ্যায় সব সময় sign bit এর মান 0 রেখে প্রকাশ করা হয়। তবে ঋনাত্মক সংখ্যা প্রকাশ করার ক্ষেত্রে sign bit 1 করা ছাড়াও আরো দুটি পদ্ধতি আছে। সেগুলো হলঃ</p>
                  <ol>
                      <li>১-এর পরিপূরক (1's complement)</li>
                      <li>২-এর পরিপূরক (2's complement)</li>
                  </ol>
              </div>
              <div class="topic-parts">
                  <p class="">ঋনাত্মক সংখ্যা প্রকাশে শুধু sign bit 1 করার নিয়মটি কম্পিউটার ব্যবহার করে না। কারন এ নিয়ম শূন্যের জন্য +0 এবং -0 মান পাওয়া যায়।</p>
                  <p>(00000000)<sub>2</sub> = (+0)<sub>10</sub><br>(10000000)<sub>2</sub> = (-0)<sub>10</sub></p>
                  <p>কিন্তু তা সম্ভব নয়। তাই কম্পিউটার এ নিয়মে ঋনাত্মক সংখ্যা প্রকাশ করে না। কম্পিউটার দুইয়ের পরিপূরক ব্যবহার করে ঋনাত্মক সংখ্যা প্রকাশ করে।</p>
              </div>
              <div class="topic-parts-imp">
                  <p class="">চিহ্ন যুক্ত সংখ্যা লিখার ক্ষেত্রে নির্দিষ্ট সংখ্যা বিট নিয়ে লিখতে হয়। কারন গাণিতিক কাজের জন্য কম্পিউটারের প্রোসেসর বাইনারি ডেটাকে রেজিস্টারে সাময়িক ভাবে সংরক্ষন করে, রেজিস্টারের আকার 2<sub>n</sub> bit হয়ে থাকে, এখানে n হল যে কোনো পূর্নসংখ্যা। যেমনঃ উপরের সব গুলো উদাহরনে 2<sub>3</sub> = 8 bit ব্যবহার করা হয়েছে। আমরা আমাদের সব উদাহরণে 8 bit ব্যবহার করেছি।</p>
              </div>
              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-9') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-11') }}"><i class="fa fa-arrow-right"></i></a>
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
