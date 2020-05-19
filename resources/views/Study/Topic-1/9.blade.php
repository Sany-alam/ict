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
            <a href="#">১.৩.২ বাইনারি বিয়োগ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
                  <p class="">বাইনারি বিয়োগে নিচের সূত্র গুলো ব্যবহার করা হয়ঃ</p>
                  <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>বাইনারি বিয়োগ</th>
                  <th>ফলাফলে বসবে</th>
                  <th>হাতে থাকে (borrow)</th>
                  </tr>
                  <tr>
                  <td>0 - 0 = 0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1 - 0 = 1</td>
                  <td>1</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1 - 1 = 0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>0 - 1 = 1</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  </table>

                  <p class="">ছোট অংক থেকে বড় অংক বিয়োগ করতে হলে ছোট অংকের সাথে ভিত্তি যোগ করতে হয়। এবং পরের ধাপের দ্বিতীয়/নিচের অংকের সাথে 1 যোগ করতে হয়। যাকে ধার বা borrow বলা হয়।<br>উপরের টেবিলে,</p>
                  <p>0 - 1 = 1</p>
                  <p>- এ যেহেতু ছোট সংখ্যা ("0") থেকে বড় সংখ্যা ("1") বিয়োগ করা হয়েছে, তাই 0 এর সাথে বাইনারির ভিত্তি 2 যোগ করা হয়েছে। ফলে ফলাফল হয় 2 - 1 = 1, অর্থাৎ ফলাফলে বসবে 1 এবং ধার (borrow) থাকে 1।</p>
                  <p>বাইনারি বিয়োগ করার সময় সাধারণ বিয়োগের মত সব কিছু লিখা হয়।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp43.png" alt="">
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: (1101)<sub>2</sub> থেকে (111)<sub>2</sub> বিয়োগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ১</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp44.png" alt="">
                  <p>ফলাফলে বসবে 0, কোনো borrow নেই।</p>

                  <p class="question text-light-primary">ধাপ ২</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp45.png" alt="">
                  <p>যেহেতু প্রথম অংক (0) থেকে দ্বিতীয় অংকটি বড় তাই প্রথম অংকের সাথে বাইনারির ভিত্তি 2 (Binary = 10) যোগ করা হয়েছে।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp46.png" alt="">
                  <p>ফলাফলে বসবে 1, যেহেতু উপরে ভিত্তি যোগ করা হয়েছে তাই borrow হবে 1</p>

                  <p class="question text-light-primary">ধাপ ৩</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp47.png" alt="">
                  <p>আগের ধাপের 1 এ ধাপের নিচের অংকের সাথে যোগ হবেঃ 1 + 1 = 10 (Decimal = 2)<br>যেহেতু এবার উপরের সংখ্যাটি ছোট হয়ে গিয়েছে তাই আগের মত এর সাথে ভিত্তি 2 (Binary = 10) যোগ করতে হবেঃ </p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp48.png" alt="">
                  <p>ফলাফলে বসবে 1, Borrow হবে 1</p>

                  <p class="question text-light-primary">ধাপ ৪</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp49.png" alt="">
                  <p>আগের ধাপের 1 এ ধাপের নিচের অংকের সাথে যোগ হবেঃ</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.2/sp50.png" alt="">
                  <p>ফলাফলে বসবে 0, কোনো borrow নেই।</p>
              </div>
              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>
              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-8') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-10') }}"><i class="fa fa-arrow-right"></i></a>
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
