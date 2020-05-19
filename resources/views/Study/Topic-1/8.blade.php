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
            <a href="#">১.৩.১ বাইনারি যোগ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
                  <p class="">বাইনারি যোগে নিচের সূত্র গুলো ব্যবহার করা হয়ঃ</p>
                  <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>বাইনারি যোগ</th>
                  <th>ফলাফলে বসবে</th>
                  <th>হাতে থাকে (Carry)</th>
                  </tr>
                  <tr>
                  <td>0 + 0 = 0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>0 + 1 = 1</td>
                  <td>1</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1 + 0 = 1</td>
                  <td>1</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1 + 1 = 10</td>
                  <td>0</td>
                  <td>1</td>
                  </tr>
                  <tr>
                  <td>1 + 1 + 1 = 11</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  </table>
              </div>
              <div class="topic-parts">
                  <p class="">বাইনারি যোগ করার সময় সাধারণ যোগের মত সব কিছু লিখা হয়। তবে ক্যারি (হাতে রাখা সংখ্যা) উপরে লিখা হয়, যাতে যোগ করতে ভূল না হয়।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp35.png" alt="">
              </div>
              <div class="topic-parts-question">
                  <p><b>প্রশ্ন: (101011)<sub>2</sub> এবং (011011)<sub>2</sub> যোগ কর।</b></p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ১</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp36.png" alt="">
                  <p>ফলাফলে বসবে 0, ক্যারি (হাতে থাকে) 1</p>
                  <p class="question text-light-primary">ধাপ ২</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp37.png" alt="">
                  <p>ফলাফলে বসবে 1 ক্যারি 1</p>
                  <p class="question text-light-primary">ধাপ ৩</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp38.png" alt="">
                  <p>ফলাফলে বসবে 1 ক্যারি 0</p>
                  <p class="question text-light-primary">ধাপ ৪</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp39.png" alt="">
                  <p>ফলাফলে বসবে 0 ক্যারি 1</p>
                  <p class="question text-light-primary">ধাপ ৫</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp40.png" alt="">
                  <p>ফলাফলে বসবে 1 ক্যারি 0</p>
                  <p class="question text-light-primary">ধাপ ৬</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp41.png" alt="">
                  <p>ফলাফলে বসবে 1 ক্যারি 1</p>
                  <p class="question text-light-primary">ধাপ ৭</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.3.1/sp42.png" alt="">
                  <p>বাকি থাকা ক্যারি 1 ফলাফলে বসে যাবে।</p>
              </div>

              <div class="topic-solve-parts">
                <button type="button">সমাধান</button>
              </div>

              <div class="topic-arrow-buttons">
                <div class="topic-back">
                  <a href="{{ url('Study/Chapter-1/Topic-7') }}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="topic-next">
                  <a href="{{ url('Study/Chapter-1/Topic-9') }}"><i class="fa fa-arrow-right"></i></a>
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
