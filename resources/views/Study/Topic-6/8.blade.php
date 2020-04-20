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
            <a href="#">৬.৭ UPDATE স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">UPDATE স্টেটমেন্ট</p><hr>
              <p>ডেটাবেজের টেবিলে কোন রেকর্ড হালনাগাদ বা আপডেট করতে <b>UPDATE</b> স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>UPDATE লিখার সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>UPDATE</b> table_name<br><b>SET</b> column1 = value1, column2 = value2, ...<br><b>WHERE</b> some_column = some_value;</p>
              </div>
              <div class="topic-parts-imp">
              <p>WHERE পদটি নির্দেশ করে কোন রেকর্ড বা রেকর্ডগুলো হালনাগাদ করতে হবে। যদি কোন কারণে WHERE পদটি বাদ দেওয়া হয় তাহলে সবগুলো রেকর্ড হালনাগাদ হয়ে যাবে। তাই এটি সতর্কতার সাথে ব্যবহার করতে হবে।</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরণ ১</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি Students_Information টেবিলের যার ID = 1 তার District Kushtia হালনাগাদ করে Chittagong করবে।</p>
              <p style="color : #607d8b!important;"><b>UPDATE</b> Students_Information<br><b>SET</b> District = <b>'Chittagong'</b><br><b>WHERE</b> ID = <b>1</b>;</p> 
              </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/11.png" alt="">
              <br><br><p>উপরের উদাহরণে আমরা WHERE পদটির মাধ্যমে নির্দিষ্ট করে দিয়েছি যে যার ID নাম্বার 1 কেবলমাত্র তার District টি-ই হালনাগাদ হবে। আমরা যদি WHERE পদটি ব্যবহার না করতাম তাহলে টেবিলের সবার District Kushtia থেকে হালনাগাদ হয়ে Chittagong হয়ে যেত। বিষয়টি আরেকটি উদাহরণের সাহায্যে দেখা যাক।</p>
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহারণ ২</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি সবার District হালনাগাদ করে Chittagong করে দিবে।</p>
              <p style="color : #607d8b!important;"><b>UPDATE</b> Students_Information<br><b>SET</b> District = <b>'Chittagong'</b></p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/12.png" alt="">
              <br><br><p>তাহলে আমরা দেখতে পাচ্ছি টেবিলের ডেটাগুলো Name এর ভিত্তিতে Descending Order-এ সেজেছে।</p>
            </div> 
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরণ ৩</p><hr>
              <p>ডেটাবেজে একসাথে একাধিক কলাম হালনাগাদ করাও সম্ভব। একাধিক কলাম হালনাগাদ করতে কমা <b>(,)</b> ব্যবহার করতে হবে। নিচের কমান্ডটি দেখা যাকঃ</p>
              <p style="color : #607d8b!important;"><b>UPDATE</b> Students_Information<br><b>SET</b> Section = '<b>Business</b>', Tution_Fees = <b>15000</b><br><b>WHERE</b> ID = <b>3</b>;</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/13.png" alt="">
              <br><br><p>উপরের উদাহরণে আমরা কমা ব্যবহার করে একইসাথে যার ID নাম্বার 3 তার Section এবং Tution_Fees হালনাগাদ করেছি।</p>
            </div>
          
          <div class="topic-arrow-buttons">
              <div class="topic-back">
                <button>
                  <i class="fa fa-arrow-left"></i>
                </button>
              </div>
              <div class="topic-next">
                <button>
                  <i class="fa fa-arrow-right"></i>
                </button>
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