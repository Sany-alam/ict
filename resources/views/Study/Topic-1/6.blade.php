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
            <a href="#">১.২.৩ বাইনারি, অক্টাল হেক্সা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
                  <p class="">বাইনারি, অক্টাল এবং হেক্সা-ডেসিম্যালের মধ্যে রূপান্তর গুলোকে ৩ ভাগে ভাগ করা যায়।</p>
                  <ol>
                      <li>অক্টাল থেকে বাইনারি, বাইনারি থেকে অক্টাল</li>
                      <li>হেক্সা-ডেসিম্যাল থেকে বাইনারি, বাইনারি থেকে হেক্সা-ডেসিম্যাল</li>
                      <li>অক্টাল থেকে হেক্সা-ডেসিম্যাল, হেক্সা-ডেসিম্যাল থেকে অক্টাল</li>
                  </ol>
                  <p class="">1 বুঝলে 2 কোনো ব্যাপার না। আর 3 নাম্বারটা 1 এবং 2 এর নিয়ম দিয়ে করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">অক্টাল থেকে বাইনারি</p><hr>
                  <p class="">অক্টাল সংখ্যা পদ্ধতিতে মোট অংক ৮টি। এর মধ্যে সব থেকে বড় অংক হচ্ছে 7। 7 এর বাইনারি হচ্ছে (111)<sub>2</sub>। অর্থাৎ অক্টালের কোন একটি অংককে বাইনারিতে প্রকাশ করতে সর্বোচ্চ 3টি bit প্রয়োজন হয়।<br>তাই আমরা কোনো অক্টাল সংখ্যাকে বাইনারিতে রূপান্তর করতে প্রতিটি অক্টাল অংকের জন্য তিন bit নিয়ে বাইনারি মান গুলো বের করব। মান গুলোকে পাশাপাশি লিখলেই আমরা অক্টালের বাইনারি মান পেয়ে যাব।</p>
                  <p>নিচে পদ্ধতিটি একটি উদাহরণের সাহায্যে দেখানো হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: অক্টাল সংখ্যা (135.542)<sub>8</sub> এর বাইনারি মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp27.png" alt="">
                  <p>এখন বাইনারি সংখ্যা গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবেঃ</p>
                  <p>(135.542)<sub>8</sub> = (001011101.101100010)<sub>2</sub></p>
                  <p>সব বামে এবং সব ডানের অতিরিক্ত শূন্য গুলো চাইলে বাদ দেয়া যায়ঃ</p>
                  <p>(135.542)<sub>8</sub> = (1011101.101100010)<sub>2</sub></p>
                  <p>এটিই আমাদের চুড়ান্ত ফলাফল।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">
              <div class="topic-parts">
                  <p class="question text-light-primary">বাইনারি থেকে অক্টাল</p><hr>
                  <p class="">উপরে যা করলাম তার উল্টা কাজ করতে হবে এখানে।<br>আমরা জেনেছি যে অক্টালের কোন একটি অংককে বাইনারিতে প্রকাশ করতে সর্বোচ্চ তিনটি bit প্রয়োজন হয়।<br>এখন আমরা বাইনারি থেকে অক্টালে রূপান্তর করার সময় ৩টা করে বাইনারি bit নেব এবং তাদের অক্টাল মান বের করব। মান গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবে।<br>দশমিকের (Radix point) এর বামে পর পর তিনটি করে বিট এবং ডানে পর পর তিনটি করে বিট নিতে হবে। নিচে পদ্ধতিটি একটি উদাহরণের সাহায্যে দেখানো হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: বাইনারি সংখ্যা (1011101.10110001)<sub>2</sub> এর অক্টাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp28.png" alt="">
                  <p>এখন অক্টাল সংখ্যা গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবেঃ</p>
                  <p>(1011101.10110001)<sub>2</sub> = (135.542)<sub>8</sub></p>
                  <p>এটিই আমাদের চুড়ান্ত ফলাফল।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">
              <div class="topic-parts">
                  <p class="question text-light-primary">হেক্সা-ডেসিম্যাল থেকে বাইনারি</p><hr>
                  <p class="">হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতিতে মোট অংক ১৬টি। এর মধ্যে সব থেকে বড় অংক হচ্ছে F যার দশমিক মান 15। 15 এর বাইনারি হচ্ছে (1111)<sub>2</sub>। অর্থাৎ হেক্সা-ডেসিম্যাল কোন একটি অংককে বাইনারিতে প্রকাশ করতে সর্বোচ্চ 4টি bit প্রয়োজন হয়।<br>তাই আমরা কোনো হেক্সা-ডেসিম্যাল সংখ্যাকে বাইনারিতে রূপান্তর করতে প্রতিটি হেক্সা-ডেসিম্যাল অংকের জন্য 4 bit নিয়ে বাইনারি মান গুলো বের করব। মান গুলোকে পাশাপাশি লিখলেই আমরা হেক্সা-ডেসিম্যালের বাইনারি মান পেয়ে যাব।</p>
                  <p>নিচে পদ্ধতিটি একটি উদাহরণের সাহায্যে দেখানো হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: হেক্সা-ডেসিম্যাল সংখ্যা (1A5.E42)<sub>16</sub> এর বাইনারি মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp29.png" alt="">
                  <p>এখন বাইনারি সংখ্যা গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবেঃ</p>
                  <p>(1A5.E42)<sub>16</sub> = (000110100101.111001000010)<sub>2</sub></p>
                  <p>সব বামে এবং সব ডানের অতিরিক্ত শূন্য গুলো চাইলে বাদ দেয়া যায়ঃ</p>
                  <p>(1A5.E42)<sub>8</sub> = (110100101.11100100001)<sub>2</sub></p>
                  <p>এটিই আমাদের চুড়ান্ত ফলাফল।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">বাইনারি থেকে হেক্সা-ডেসিম্যাল</p><hr>
                  <p class="">উপরে যা করলাম তার উল্টা কাজ করতে হবে এখানে।</p>
                  <p>আমরা জেনেছি যে হেক্সা-ডেসিম্যালের কোন একটি অংককে বাইনারিতে প্রকাশ করতে সর্বোচ্চ 4 টি bit প্রয়োজন হয়। এখন আমরা বাইনারি থেকে হেক্সা-ডেসিম্যালে রূপান্তর করার সময় 4 টি করে বাইনারি bit নেব এবং তাদের হেক্সা-ডেসিম্যাল মান বের করব। মান গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবে।</p>
                  <p>দশমিকের (Radix point) এর বামে পর পর 4 টি করে বিট এবং ডানে পর পর 4 টি করে বিট নিতে হবে। নিচে পদ্ধতিটি একটি উদাহরণের সাহায্যে দেখানো হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: বাইনারি সংখ্যা (110100101.11100100001)<sub>2</sub> এর হেক্সা-ডেসিম্যাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp30.png" alt="">
                  <p>এখন হেক্সা-ডেসিম্যাল সংখ্যা গুলোকে পাশাপাশি লিখলেই রূপান্তরিত মান পাওয়া যাবেঃ</p>
                  <p>(110100101.11100100001)<sub>2</sub> = (1A5.E42)<sub>16</sub></p>
                  <p>এটিই আমাদের চুড়ান্ত ফলাফল।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">অক্টাল থেকে হেক্সা-ডেসিম্যাল</p><hr>
                  <p class="">অক্টাল সংখ্যা পদ্ধতি থেকে হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতিতে রূপান্তরের জন্য আমরা নতুন কোনো নিয়ম ব্যবহার করি না। আমরা শুরুতে অক্টালকে বাইনারিতে রূপান্তরিত করি, তারপর সেই বাইনারি সংখ্যাকে হেক্সা-ডেসিম্যালে রূপান্তরিত করি।</p>
                  <p>নিচে একটি উদাহরণ দেয়া হল।	</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: অক্টাল সংখ্যা (247.315)<sub>8</sub> এর হেক্সা-ডেসিম্যাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p>প্রথমে আমরা অক্টাল সংখ্যাটিকে বাইনারি সংখ্যায় রূপান্তর করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp31.png" alt="">
                  <p>তাহলে আমরা পেলামঃ</p>
                  <p>(010100111.011001101)<sub>2</sub></p>
                  <p>এবার বাইনারি সংখ্যাটিকে হেক্সা-ডেসিম্যালে রূপান্তর করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp32.png" alt="">
                  <p>তাহলে আমাদের চুড়ান্ত ফলাফল হলঃ</p>
                  <p>(247.315)<sub>8</sub> = (A7.668)<sub>16</sub></p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">হেক্সা-ডেসিম্যাল থেকে অক্টাল</p><hr>
                  <p class="">হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতি থেকে অক্টাল সংখ্যা পদ্ধতিতে রূপান্তরের জন্য আমরা নতুন কোনো নিয়ম ব্যবহার করি না। আমরা শুরুতে হেক্সা-ডেসিম্যালকে বাইনারিতে রূপান্তরিত করি, তারপর সেই বাইনারি সংখ্যাকে অক্টালে রূপান্তরিত করি।</p>
                  <p>নিচে একটি উদাহরণ দেয়া হল।	</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: হেক্সা-ডেসিম্যাল সংখ্যা (12D.4A2)<sub>16</sub> এর অক্টাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p>প্রথমে আমরা হেক্সা-ডেসিম্যাল সংখ্যাটিকে বাইনারি সংখ্যায় রূপান্তর করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp33.png" alt="">
                  <p>তাহলে আমরা পেলামঃ</p>
                  <p>(000100101011.010010100010)<sub>2</sub></p>
                  <p>এবার বাইনারি সংখ্যাটিকে অক্টালে রূপান্তর করব।</p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.3/sp34.png" alt="">
                  <p>তাহলে আমাদের চুড়ান্ত ফলাফল হলঃ</p>
                  <p>(12D.4A2)<sub>16</sub> = (453.2242)<sub>8</sub></p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>

              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-5') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-7') }}"><i class="fa fa-arrow-right"></i></a>
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
