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
            <a href="#">১.২.২ সব থেকে দশমিক</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
                  <p class="question text-light-primary">যে কোনো সংখ্যা পদ্ধতি থেকে দশমিক সংখ্যা পদ্ধতি</p><hr>
                  <p class="">যে কোন সংখ্যা পদ্ধতিতে থেকে দশমিক সংখ্যা পদ্ধতিতে রূপান্তরের ক্ষেত্রে নিচের ধাপ গুলো অনুসরণ করতে হয়</p>
                  <ol>
                      <li>প্রদত্ত সংখ্যাটির ভিত্তি শনাক্ত করতে হবে এবং সংখ্যাটির প্রত্যেকটি অংকের স্থানীয় মান বের করতে হবে।</li>
                      <li>সংখ্যার প্রত্যেকটি অংকের নিজস্ব মানকে তার স্থানীয় মান দিয়ে গুণ করতে হবে।</li>
                      <li>গুণফলগুলোর যোগফলই হবে রুপান্তরিত দশমিক সংখ্যা।</li>
                  </ol>
              </div>

              <div class="topic-parts-imp">
                  <p class="">যে কোনো সংখ্যা পদ্ধতিতে স্থানীয় মান হয় নিচের মতঃ</p>
                  <p class="">. . . n<sup>2</sup> n<sup>1</sup> n<sup>0</sup> . n<sup>-1</sup> n<sup>-2</sup> n<sup>-3</sup> . . .</p>
                  <p class="">এখানে n হল যে সংখ্যা পদ্ধতি থেকে দশমিক সংখ্যা পদ্ধতিতে নিতে হবে তার ভিত্তি।<br>যেমনঃ অক্টাল থেকে দশমিক করতে হলে n = 8 হবে, বাইনারি থেকে দশমিক করতে n = 2 হবে, হেক্সা-ডেসিম্যাল থেকে দশমিক করতে হলে n = 16 হবে ইত্যাদি।</p>
              </div>

              <div class="topic-parts">
                  <p class="question text-light-primary">বাইনারি থেকে দশমিক</p><hr>
                  <p class="">বাইনারি সংখ্যা পদ্ধতি থেকে দশমিক সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।<br>দ্রষ্টব্যঃ বাইনারি সংখ্যা পদ্ধতির ভিত্তি 2।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: বাইনারি সংখ্যা (1101.1011)<sub>2</sub> এর দশমিক মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p>যেহেতু বাইনারি সংখ্যা পদ্ধতির ভিত্তি 2, তাই বাইনারি সংখ্যাটির প্রতিটি অংককে উপরে দেখানো স্থানীয় মান নিয়মে n = 2 বসিয়ে প্রতিটি অংককে গুন করে যোগ করতে হবে।</p>
                  <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.2/sp24.png" alt="">
                  <p>সুতরাং (1101.1011)<sub>2</sub> = (13.6875)<sub>10</sub></p>
              </div>

              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">অক্টাল থেকে দশমিক</p><hr>
                  <p class="">অক্টাল সংখ্যা পদ্ধতি থেকে দশমিক সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।<br>দ্রষ্টব্যঃ অক্টাল সংখ্যা পদ্ধতির ভিত্তি 8।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: অক্টাল সংখ্যা (1357.2461)<sub>8</sub> এর দশমিক মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p>যেহেতু অক্টাল সংখ্যা পদ্ধতির ভিত্তি 8, তাই অক্টাল সংখ্যাটির প্রতিটি অংককে উপরে দেখানো স্থানীয় মান নিয়মে n = 8 বসিয়ে প্রতিটি অংককে গুন করে যোগ করতে হবে।</p>
                  <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.2/sp25.png" alt="">
                  <p>সুতরাং (1357.2461)<sub>8</sub> = (751.324344)<sub>10</sub></p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">হেক্সা-ডেসিম্যাল থেকে দশমিক</p><hr>
                  <p class="">হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতি থেকে দশমিক সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।<br>দ্রষ্টব্যঃ হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতির ভিত্তি 16।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: হেক্সা-ডেসিম্যাল সংখ্যা (A3B1.2C6)<sub>16</sub> এর দশমিক মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p>যেহেতু হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতির ভিত্তি 16, তাই হেক্সা-ডেসিম্যাল সংখ্যাটির প্রতিটি অংককে উপরে দেখানো স্থানীয় মান নিয়মে n = 16 বসিয়ে প্রতিটি অংককে গুন করে যোগ করতে হবে।</p>
                  <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.2/sp26.png" alt="">
                  <p>সুতরাং (A3B1.2C6)<sub>16</sub> = (41905.1697)<sub>10</sub></p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>

              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-4') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-6') }}"><i class="fa fa-arrow-right"></i></a>
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
