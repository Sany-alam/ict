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
            <a href="#">১.২.১ দশমিক থেকে সব</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p class="question text-light-primary">দশমিক সংখ্যা পদ্ধতি থেকে যে কোনো সংখ্যা পদ্ধতি</p><hr>
                  <p class="">দশমিক থেকে যে কোন সংখ্যা পদ্ধতিতে রূপান্তরের ক্ষেত্রে পূর্নসংখ্যা এবং ভগ্নাংশ আলাদা করে বের করতে হয়।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp7.png" alt="">
                  <br><br>
                  <p class="">পূর্ন সংখ্যার ক্ষেত্রে নিচের ধাপ গুলো অনুসরণ করতে হয়ঃ</p>
                  <ol>
                      <li>পূর্ন সংখ্যাটিকে যে সংখ্যা পদ্ধতিতে নেয়া হবে তার ভিত্তি (যেমনঃ বাইনারি হলে 2, অক্টাল হলে 8, হেক্সা হলে 16) দিয়ে ভাগ করতে হবে এবং ভাগশেষ আলাদা করে লিখে রাখতে হবে।</li>
                      <li>উপরের ধাপে প্রাপ্ত ভাগফলকে আবার ভিত্তি দিয়ে ভাগ করতে হবে এবং ভাগশেষ সংরক্ষন করতে হবে।</li>
                      <li>2 নং ধাপটি চলতে থাকবে যতক্ষন পর্যন্ত ভাগশেষ শূন্য না আসে।</li>
                      <li>সংরক্ষতি ভাগশেষ গুলো সর্বশেষে পাওয়া ভাগশেষ থেকে প্রথম ভাগশেষ পর্যন্ত পর পর বাম থেকে ডানে দিকে লিখলে রূপান্তরিত সংখ্যাটি পাওয়া যাবে।</li>
                  </ol>

                  <p class="">ভগ্নাংশের ক্ষেত্রে নিচের ধাপ গুলো অনুসরণ করতে হয়ঃ</p>
                  <ol>
                      <li>ভগ্নাংশটিকে যে সংখ্যা পদ্ধতিতে নেয়া হবে তার ভিত্তি (যেমনঃ বাইনারি হলে 2, অক্টাল হলে 8, হেক্সা হলে 16) দিয়ে গুন করতে হবে এবং পূর্ন অংশটিকে আলাদা করে সংরক্ষন করতে হবে।</li>
                      <li>উপরের ধাপে প্রাপ্ত ভগ্নাংশটিকে আবার ভিত্তি দিয়ে গুন করতে হবে এবং পূর্ন অংশটি সংরক্ষন করতে হবে।</li>
                      <li>2 নং ধাপটি চলতে থাকবে যতক্ষন পর্যন্ত গুনফল পূন্য সংখ্যা আসে, অর্থাৎ ভগ্নাশ শূন্য না আসে।</li>
                      <li>সংরক্ষতি পূর্ন সংখ্যা গুলো সর্বপ্রথমে পাওয়া পূর্ন সংখ্যা থেকে সর্বশেষে পাওয়া পূর্ণ সংখ্যা পর্যন্ত পর পর বাম থেকে ডানে দিকে লিখলে রূপান্তরিত সংখ্যাটি পাওয়া যাবে।</li>
                  </ol>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">দশমিক থেকে বাইনারি</p><hr>
                  <p class="">দশমিক থেকে বাইনারি সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।<br>দ্রষ্টব্যঃ বাইনারি সংখ্যা পদ্ধতির ভিত্তি 2</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: দশমিক সংখ্যা (123.456)<sub>10</sub> এর বাইনারি মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p style="text-decoration: underline;">পূর্ণ সংখ্যা </p>
                  <p>প্রশ্নের সংখ্যাটির পূর্ণ সংখ্যা হচ্ছে 123। এবার 123 কে বাইনারির ভিত্তি 2 দিয়ে ভাগ করতে থাকব যতক্ষন পর্যন্ত ভাগফল শূণ্য না হয়। এবং প্রতিবার ভাগশেষ গুলো লিখে রাখব।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp8.png" alt="">
                  <p>123 কে 2 দিয়ে ভাগ করলে ভাগফল 61 এবং ভাগশেষ 1।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp9.png" alt="">
                  <p>61 কে 2 দিয়ে ভাগ করলে ভাগফল 30 এবং ভাগশেষ 1।<br>এভাবে ভাগফল শূন্য না হওয়া পর্যন্ত করতে হবে।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp10.png" alt="">
                  <p>শেষ ধাপে 1 কে 2 দিয়ে ভাগ করলে ভাগফল হবে 0, কারন 2 দিয়ে 1 কে আর ভাগ যাবে না। ভাগশেষ হবে 1।</p>
                  <p>এবার নিচে থেকে উপরের দিকে ভাগশেষ গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(123)<sub>10</sub> = (1111011)<sub>2</sub></b></p>
                <br>
                  <p style="text-decoration: underline;">ভগ্নাংশ </p>
                  <p>প্রশ্নের সংখ্যাটির ভগ্নাংশ হচ্ছে .456। এখন প্রতিবার ভগ্নাংশকে বাইনারির ভিত্তি 2 দিয়ে গুন করতে থাকব, যতক্ষন গুনফল শূন্য না আসে এবং পূর্ণ অংশ গুলোকে সংরক্ষন করব।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp11.png" alt="">
                  <p>.456 কে 2 দিয়ে গুন করলে পাওয়া যায় 0.912। 0 কে সংরক্ষন করতে হবে এবং .912 কে আবার 2 দিয়ে গুন করতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp12.png" alt="">
                  <p>.912 কে 2 দিয়ে গুন করলে পাওয়া যায় 1.824। 1 কে সংরক্ষন করতে হবে এবং .824 কে আবার 2 দিয়ে গুন করতে হবে।<br>এভাবে যতক্ষন ভগ্নাংশ 0 না আসবে ততক্ষন গুন করে যেতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp13.png" alt="">
                  <p>যেহেতু ৫টা উত্তর বের করার পরও গুনফল পূর্নসংখ্যা আসছে না, অর্থাৎ ভগ্নাংশ শূন্য আসছে না তাই আর না করলেও চলবে।</p>
                  <p>উপর থেকে নিচের দিকে পূর্ন সংখ্যা গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(.456)<sub>10</sub> = (.01110...)<sub>2</sub></b></p>
                  <br>
                  <p>যেহেতু আরো গুন করা যাবে তাই ফলাফলের শেষে "..." দেয়া হয়েছে। গুনফল পূর্ন সংখ্যা পাওয়া গেলে এটি দিতে হবে না।</p>
                  <p>এখন পূর্ণসংখ্যা এবং ভগ্নাংশ একত্রে লিখলে চুড়ান্ত ফলাফল হবেঃ<br><b>(123.456)<sub>10</sub> = (1111011.01110...)<sub>2</sub></b></p>
              </div>

              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">দশমিক থেকে অক্টাল</p><hr>
                  <p class="">দশমিক থেকে অক্টাল সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন:  দশমিক সংখ্যা (123.456)<sub>10</sub> এর অক্টাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p style="text-decoration: underline;">পূর্ণ সংখ্যা </p>
                  <p>প্রশ্নের সংখ্যাটির পূর্ণ সংখ্যা হচ্ছে 123। এবার 123 কে অক্টালের ভিত্তি 8 দিয়ে ভাগ করতে থাকব যতক্ষন পর্যন্ত ভাগফল শূণ্য না হয়। এবং প্রতিবার ভাগশেষ গুলো লিখে রাখব।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp14.png" alt="">
                  <p>123 কে 8 দিয়ে ভাগ করলে ভাগফল 15 এবং ভাগশেষ 3।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp15.png" alt="">
                  <p>61 কে 8 দিয়ে ভাগ করলে ভাগফল 1 এবং ভাগশেষ 7।<br>এভাবে ভাগফল শূন্য না হওয়া পর্যন্ত করতে হবে।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp16.png" alt="">
                  <p>শেষ ধাপে 1 কে 8 দিয়ে ভাগ করলে ভাগফল হবে 0, কারন 8 দিয়ে 1 কে আর ভাগ যাবে না। ভাগশেষ হবে 1।</p>
                  <p>এবার নিচে থেকে উপরের দিকে ভাগশেষ গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(123)<sub>10</sub> = (173)<sub>8</sub></b></p>
                <br>
                  <p style="text-decoration: underline;">ভগ্নাংশ </p>
                  <p>প্রশ্নের সংখ্যাটির ভগ্নাংশ হচ্ছে .456। এখন প্রতিবার ভগ্নাংশকে বাইনারির ভিত্তি 2 দিয়ে গুন করতে থাকব, যতক্ষন গুনফল শূন্য না আসে এবং পূর্ণ অংশ গুলোকে সংরক্ষন করব।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp17.png" alt="">
                  <p>.456 কে 8 দিয়ে গুন করলে পাওয়া যায় 3.648। 3 কে সংরক্ষন করতে হবে এবং .648 কে আবার 8 দিয়ে গুন করতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp18.png" alt="">
                  <p>.648 কে 8 দিয়ে গুন করলে পাওয়া যায় 5.184। 5 কে সংরক্ষন করতে হবে এবং .184 কে আবার 8 দিয়ে গুন করতে হবে।<br>এভাবে যতক্ষন ভগ্নাংশ 0 না আসবে ততক্ষন গুন করে যেতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp19.png" alt="">
                  <p>যেহেতু ৫টা উত্তর বের করার পরও গুনফল পূর্নসংখ্যা আসছে না, অর্থাৎ ভগ্নাংশ শূন্য আসছে না তাই আর না করলেও চলবে।</p>
                  <p>উপর থেকে নিচের দিকে পূর্ন সংখ্যা গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(.456)<sub>10</sub> = (.35136...)<sub>8</sub></b></p>
                  <br>
                  <p>যেহেতু আরো গুন করা যাবে তাই ফলাফলের শেষে "..." দেয়া হয়েছে। গুনফল পূর্ন সংখ্যা পাওয়া গেলে এটি দিতে হবে না।</p>
                  <p>এখন পূর্ণসংখ্যা এবং ভগ্নাংশ একত্রে লিখলে চুড়ান্ত ফলাফল হবেঃ<br><b>(123.456)<sub>10</sub> = (173.35136...)<sub>8</sub></b></p>
              </div>

              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <img class="col-sm-12 col-md-12 responsive" src="{{ asset('assets') }}/images/1x/dot.png" alt="" style="padding-bottom:10px;">

              <div class="topic-parts">
                  <p class="question text-light-primary">দশমিক থেকে হেক্সা-ডেসিম্যাল</p><hr>
                  <p class="">দশমিক থেকে হেক্সা-ডেসিম্যাল সংখ্যা পদ্ধতিতে রুপান্তর করার একটি উদাহরন নিচে দেয়া হল।</p>
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: দশমিক সংখ্যা (123.456)<sub>10</sub> এর হেক্সা-ডেসিম্যাল মান কত?</b></p>
              </div>
              <div class="topic-parts">
                  <p><b>প্রশ্ন: দশমিক সংখ্যা (123.456)<sub>10</sub> এর হেক্সা-ডেসিম্যাল মান কত?</b></p>
                  <p style="text-decoration: underline;">পূর্ণ সংখ্যা </p>
                  <p>প্রশ্নের সংখ্যাটির পূর্ণ সংখ্যা হচ্ছে 123। এবার 123 কে হেক্সা-ডেসিম্যালের ভিত্তি 16 দিয়ে ভাগ করতে থাকব যতক্ষন পর্যন্ত ভাগফল শূণ্য না হয়। এবং প্রতিবার ভাগশেষ গুলো লিখে রাখব।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp20.png" alt="">
                  <p>123 কে 16 দিয়ে ভাগ করলে ভাগফল 7 এবং ভাগশেষ 11। 11 এর হেক্সা-ডেসিম্যাল মান B।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp21.png" alt="">
                  <p>7 কে 16 দিয়ে ভাগ করলে ভাগফল হবে 0, কারন 16 দিয়ে 7 কে আর ভাগ যাবে না। ভাগশেষ হবে 7।</p>
                  <p>এবার নিচে থেকে উপরের দিকে ভাগশেষ গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(123)<sub>10</sub> = (7B)<sub>16</sub></b></p>
                <br>
                  <p style="text-decoration: underline;">ভগ্নাংশ </p>
                  <p>প্রশ্নের সংখ্যাটির ভগ্নাংশ হচ্ছে .456। এখন প্রতিবার ভগ্নাংশকে হেক্সা-ডেসিম্যালের ভিত্তি 16 দিয়ে গুন করতে থাকব, যতক্ষন গুনফল শূন্য না আসে এবং পূর্ণ অংশ গুলোকে সংরক্ষন করব।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp22.png" alt="">
                  <p>.456 কে 16 দিয়ে গুন করলে পাওয়া যায় 7.296। 7 কে সংরক্ষন করতে হবে এবং .296 কে আবার 16 দিয়ে গুন করতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp23.png" alt="">
                  <p>.296 কে 16 দিয়ে গুন করলে পাওয়া যায় 4.736। 4 কে সংরক্ষন করতে হবে এবং .736 কে আবার 16 দিয়ে গুন করতে হবে।<br>এভাবে যতক্ষন ভগ্নাংশ 0 না আসবে ততক্ষন গুন করে যেতে হবে।</p>
                  <img class="col-sm-12 col-md-3 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.2.1/sp24.png" alt="">
                  <p>যেহেতু ৫টা উত্তর বের করার পরও গুনফল পূর্নসংখ্যা আসছে না, অর্থাৎ ভগ্নাংশ শূন্য আসছে না তাই আর না করলেও চলবে।</p>
                  <p>উপর থেকে নিচের দিকে পূর্ন সংখ্যা গুলো পাশাপাশি লিখলে ফলাফল আসবেঃ<br><b>(.456)<sub>10</sub> = (.74BC6...)<sub>16</sub></b></p>
                  <br>
                  <p>যেহেতু আরো গুন করা যাবে তাই ফলাফলের শেষে "..." দেয়া হয়েছে। গুনফল পূর্ন সংখ্যা পাওয়া গেলে এটি দিতে হবে না।</p>
                  <p>এখন পূর্ণসংখ্যা এবং ভগ্নাংশ একত্রে লিখলে চুড়ান্ত ফলাফল হবেঃ<br><b>(123.456)<sub>10</sub> = (7B.74BC6...)<sub>16</sub></b></p>
              </div>

              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>


              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-3') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-5') }}"><i class="fa fa-arrow-right"></i></a>
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
