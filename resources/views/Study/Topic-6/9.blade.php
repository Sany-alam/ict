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
            <a href="#">৬.৮ DELETE স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">DELETE স্টেটমেন্ট</p><hr>
              <p>ডেটাবেজের টেবিল থেকে কোন Row মুছে ফেলার জন্য <b>DELETE</b> স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>DELETE লিখার সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>DELETE FROM</b> table_name<br><b>WHERE</b> some_column = some_value;</p>
              </div>
              <div class="topic-parts-imp">
              <p>WHERE পদটি নির্দেশ করে কোন কোন রেকর্ড বা রেকর্ডগুলো মুছে ফেলতে হবে। যদি WHERE পদটি বাদ দেওয়া হয় তাহলে সব রেকর্ডই মুছে যাবে।</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরণ ১</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি Students_Information টেবিল থেকে Didarul Dipu-র সকল তথ্য মুছে ফেলবে।</p>
              <p style="color : #607d8b!important;"><b>DELETE FROM</b> Students_Information<br><b>WHERE</b> Name = 'Didarul Dipu';</p>
              </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/14.png" alt=""></div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহারণ ২</p><hr>
              <p>SQL এ টেবিল মুছে না ফেলে টেবিলের সবগুলো ডেটা বা Row মুছে ফেলা সম্ভব। অর্থাৎ টেবিলের স্ট্রাকচার, ইনডেক্স, অ্যাট্রিবিউট সব অপরিবর্তিত থাকবে, শুধু টেবিলের ডেটা বা রেকর্ডগুলো মুছে যাবে। এটি নিচের মত করে লিখা যায়ঃ</p>
              <p style="color : #607d8b!important;"><b>DELETE FROM</b> table_name</p>
              <p>অথবা,</p>
              <p style="color : #607d8b!important;"><b>DELETE * FROM</b> table_name</p>
              <p>আমাদের টেবিলের ক্ষেত্রে table_name এর জায়গায় আমাদের টেবিলের নাম অর্থাৎ Students_Information ব্যবহার করলেই টেবিলের সবগুলো ডেটা মুছে যাবে।</p>
            </div>
            <div class="topic-parts-imp">
              <p>SQL টেবিল থেকে রেকর্ড মুছে ফেলার সময় খুবই সতর্কতার সাথে কাজ করতে হবে। কোন রেকর্ড একবার মুছে ফেলা হলে তা আর ফেরত পাওয়া সম্ভব নয়।</p>
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