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
            <a href="#">৬.১০ DROP কী-ওয়ার্ডড</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">DROP কী-ওয়ার্ড</p><hr>
              <p>ডেটাবেজের টেবিল থেকে কোন কলাম মুছে ফেলতে DROP COLUMN স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>DROP COLUMN ব্যবহার করার সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> table_name<br><b>DROP COLUMN</b> column_name</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরণ ১</p><hr>
              <p>ধরা যাক আমরা Students_Information টেবিল থেকে Tution_Fees কলামটি বাদ দিতে চাই। তাহলে নিচের কমান্ডটি দেখা যাকঃ</p>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> Students_Information<br><b>DROP COLUMN</b> Tution_Fees;</p> 
              </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/16.png" alt="">
              </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহারণ ২</p><hr>
              <p>আমরা চাইলে পুরা টেবিলটি মুছে ফেলতে পারি। নিচের কমান্ডটি পুরা Students_Information টেবিলটিই মুছে ফেলবে।</p>
              <p style="color : #607d8b!important;"><b>DROP TABLE</b> Students_Information</p>
            </div>
            
          
          <div class="topic-arrow-buttons">
              <div class="topic-back">
                <button>
                  <i class="fa fa-arrow-left"></i>
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