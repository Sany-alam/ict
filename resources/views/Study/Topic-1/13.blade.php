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
            {{-- <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a> --}}
            @include('includes.back')
            <!-- box title -->
            <a href="#">১.৪.২.১ দুই-এর পরিপূরকে যোগ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
                  <p>ঋনাত্মক সংখ্যা প্রকাশের জন্য কম্পিউটার ২-এর পরিপূরক গঠন ব্যবহার করে।</p>
              </div>
              <div class="topic-parts">
                  <p class="">২ এর পরিপূরক গঠনে যোগ করতে নিচের ধাপ গুলো অনুসরণ করতে হয়ঃ</p>
                  <ol>
                      <li>ধনাত্মক সংখ্যা ক্ষেত্রে সাধারণ নিয়মে বাইনারি মান বের করতে হয়।</li>
                      <li>ঋনাত্মক সংখ্যার ক্ষেত্রে ২-এর পরিপূরক ব্যবহার করে ঋনাত্মক মান বের করতে হয়।</li>
                      <li>বাইনারি নিয়মে সংখ্যা গুলো যোগ করতে হবে</li>
                      <li>ফলাফলে ক্যারি overflow হলে তা বিবেচনা করা হয় না। (নিচে উদাহরণ দেখুন)</li>
                      <li>যোগফলের sign bit 1 হলে বুঝতে হবে সংখ্যাটি ২-এর পরিপূরক গঠনে আছে। তাই ২-এর পরিপূরকের মান বের করার নিয়ম অনুসারে মান বের করতে হবে।</li>
                  </ol>
              </div>

              <div class="topic-parts-question">
                  <p><b>প্রশ্ন:-৭ এবং -১২ যোগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="">প্রথমে -৭ এবং -১২ এর মান বের করতে হবে। যেহেতু এ দুটিই ঋনাত্মক সংখ্যা; তাই ২-এর পরিপূরক ব্যবহার করে এদের মান বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp56.png" alt="">
                  <p>এবার -১২ এর মান বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp57.png" alt="">
                  <p>এবার -৭ এবং -১২ যোগ করতে হবে বাইনারি নিয়মে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp58.png" alt="">
                  <p>আমরা বাইনারি যোগ ৮ বিট ব্যবহার করে করছি। দেখা যাচ্ছে যোগফলে 1 overflow হয়েছে, অর্থাৎ ক্যারি ৮ বিটের বাহিরে চলে গিয়েছে! তাই আমরা overflow ক্যারিটিকে বাদ দেব।<br>যোগফলের চিহ্ন বিট (sign bit) 1, অর্থাৎ যোগফল ঋনাত্মক এবং এটি ২-এর পরিপূরকে রয়েছে (ঋনাত্মক সংখ্যা মানেই ২-এর পরিপূরক)। এখন আমরা যোগ ফলের মান বের করতে আবার একে ২-এর পরিপূরক করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp59.png" alt="">
                  <p>সুতরাং -৭ এবং -১২ এর যোগফলঃ<br>(11101101)<sub>2</sub> = (-19)<sub>10</sub></p>
              </div>

              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: -৮ এবং +৫ যোগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="">প্রথমে -৮ এর মান বের করতে হবে। যেহেতু এটি ঋনাত্মক সংখ্যা তাই ২-এর পরিপূরক ব্যবহার করে এর মান বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp60.png" alt="">
                  <p>এবার +৫ এর বাইনারি মান বের করতে হবে স্বাভাবিক পদ্ধতিতে।</p>
                  <p>(+5)₁₀ = (00000101)₂</p>
                  <p>এবার +৫ এবং -৮ যোগ করতে হবে বাইনারি নিয়মে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp61.png" alt="">
                  <p>যোগফলের চিহ্ন বিট (sign bit) 1, অর্থাৎ যোগফল ঋনাত্মক এবং এটি ২-এর পরিপূরকে রয়েছে (ঋনাত্মক সংখ্যা মানেই ২-এর পরিপূরক)। এখন আমরা যোগ ফলের মান বের করতে আবার একে ২-এর পরিপূরক করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.1/sp62.png" alt="">
                  <p>সুতরাং -৮ এবং +৫ এর যোগফলঃ<br>(11111101)<sub>2</sub> = (-3)<sub>10</sub></p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>

              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-12') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-14') }}"><i class="fa fa-arrow-right"></i></a>
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
