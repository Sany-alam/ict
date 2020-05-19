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
            <a href="#">১.৪.২.২ দুই-এর পরিপূরকে বিয়োগ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p>ঋনাত্মক সংখ্যা প্রকাশের জন্য কম্পিউটার ২-এর পরিপূরক গঠন ব্যবহার করে।</p>
              </div>
              <div class="topic-parts">
              <p class="">২ এর পরিপূরক গঠনে বিয়োগ করার নিয়ম যোগ করার মতই, শুধু একটি ধাপ বেশী করতে হয়। ২ এর পরিপূরক গঠনে বিয়োগ করা হয় যোগের মাধ্যমেই।</p>
              <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp63.png" alt="">
              <br><br><p class="">২ এর পরিপূরক গঠনে বিয়োগ করতে নিচের ধাপ গুলো অনুসরণ করতে হয়ঃ</p>
                  <ol>
                      <li>ধনাত্মক সংখ্যা ক্ষেত্রে সাধারণ নিয়মে বাইনারি মান বের করতে হয়।</li>
                      <li>ঋনাত্মক সংখ্যার ক্ষেত্রে ২-এর পরিপূরক ব্যবহার করে ঋনাত্মক মান বের করতে হয়।</li>
                      <li>দ্বিতীয় সংখ্যাটি অর্থাৎ বিয়োজ্য সংখ্যাটির ২ এর পরিপূরক নির্ণয় করতে হয়। (যোগের ধাপ গুলো থেকে অতিরিক্ত করতে হয় এ ধাপটি)</li>
                      <li>বাইনারি নিয়মে সংখ্যা গুলো যোগ করতে হবে</li>
                      <li>ফলাফলে ক্যারি overflow হলে তা বিবেচনা করা হয় না। (নিচে উদাহরণ দেখুন)</li>
                      <li>যোগফলের sign bit 1 হলে বুঝতে হবে সংখ্যাটি ২-এর পরিপূরক গঠনে আছে। তাই ২-এর পরিপূরকের মান বের করার নিয়ম অনুসারে মান বের করতে হবে।</li>
                  </ol>
                  <p>নিচে কিছু উদাহরণ দেখানো হল।</p>
              </div>

              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: +5 থেকে -3 বিয়োগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="">এখানে +5 বিয়োজন এবং -3 বিয়োজ্য।<br>ধরি, রেজিক্টারের আকার 8 bit। তাই বাইনারি প্রকাশের ক্ষেত্রে 8bit ব্যবহার করা হবে।<br>প্রথমে +5 এর মান বের করতে হবে।</p>
                  <p>(+5)<sub>10</sub> = (00000101)<sub>2</sub></p>
                  <p>তারপর -3 এর মান বের করতে হবে। যেহেতু এটি ঋনাত্মক সংখ্যা তাই ২-এর পরিপূরক ব্যবহার করে এর মান বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp64.png" alt="">
                  <p>প্রদত্ত সংখ্যা গুলোর বাইনারি মান বের করা শেষ।</p>
                  <p>এবার বিয়োজ্য (-3) এর ২-এর পরিপূরক বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp65.png" alt="">
                  <p>যোগফলের চিহ্ন বিট (sign bit) 0, অর্থাৎ যোগফল ধনাত্মক, তাই অতিরিক্ত আর কিছু করত হবে না।</p>
                  <p>সুতরাং +5 থেকে -3 এর বিয়োগ ফলঃ<br>(00001000)<sub>2</sub> = (+8)<sub>10</sub></p>
                  <p>দশমিকে যদি আমরা ফলাফল পরিক্ষা করিঃ<br>
                  (+5) - (-3)<br>
                  = 5 + 3 [minus munus = plus]<br>
                  = 8<br>
                  অতএব আমাদের উত্তর সঠিক। </p>
              </div>

              <div class="topic-parts-question">
                  <p><b>প্রশ্ন:-5 থেকে +3 বিয়োগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="">এখানে -5 বিয়োজন এবং +3 বিয়োজ্য।<br>ধরি, রেজিক্টারের আকার 8 bit। তাই বাইনারি প্রকাশের ক্ষেত্রে 8 bit ব্যবহার করা হবে।<br>প্রথমে -5 এর মান বের করতে হবে। যেহেতু এটি ঋনাত্মক সংখ্যা তাই ২-এর পরিপূরক ব্যবহার করে এর মান বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp66.png" alt="">
                  <p>তারপর +3 এর মান বের করতে হবে।<br>
                  (+3)<sub>10</sub> = (00000011)<sub>2</sub><br>
                  প্রদত্ত সংখ্যা গুলোর বাইনারি মান বের করা শেষ।</p>
                  <p>এবার বিয়োজ্য (+3) এর ২-এর পরিপূরক বের করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp67.png" alt="">
                  <p>এবার -5 এর সাথে +3 এর ২-এর পরিপূরক যোগ করতে হবে।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp68.png" alt="">
                  <p>আমরা বাইনারি যোগ 8 bit ব্যবহার করে করছি। দেখা যাচ্ছে যোগফলে 1 overflow হয়েছে, অর্থাৎ ক্যারি 8 bit এর বাহিরে চলে গিয়েছে! তাই আমরা overflow ক্যারিটিকে বাদ দেব।</p>
                  <p>যোগফলের চিহ্ন বিট (sign bit) 1, অর্থাৎ যোগফল ঋনাত্মক এবং এটি ২-এর পরিপূরকে রয়েছে (ঋনাত্মক সংখ্যা মানেই ২-এর পরিপূরক)। এখন আমরা যোগ ফলের মান বের করতে আবার একে ২-এর পরিপূরক করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.4.2.2/sp69.png" alt="">
                  <p>সুতরাং -5 থেকে +3 এর বিয়োগফলঃ<br>(11111000)<sub>2</sub> = (-8)<sub>10</sub></p>
                  <p>দশমিকে যদি আমরা ফলাফল পরিক্ষা করিঃ<br>
                  (-5) - (+3)<br>
                  = - 5 - 3 [minus munus = plus]<br>
                  = - 8 [minus minus = munus; sign = minus]<br>
                  অতএব আমাদের উত্তর সঠিক। </p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
</div>

            <div class="topic-arrow-buttons">
                <div class="topic-back">
                <a href="{{ url('Study/Chapter-1/Topic-12') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                <a href="{{ url('Study/Chapter-2/Topic-1') }}"><i class="fa fa-arrow-right"></i></a>
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
