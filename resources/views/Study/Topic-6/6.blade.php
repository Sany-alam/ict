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
            <a href="#">৬.৫ AND & OR অপারেটর</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">AND & OR অপারেটর</p><hr>
              <p>আমরা দেখেছি ডেটাবেজ থেকে কিভাবে একটিমাত্র শর্ত ব্যবহার করে ডেটা বা রেকর্ড খুঁজতে হয়। কিন্তু এমন হতে পারে যে আমাদের একাধিক শর্তসাপেক্ষে ডেটা খুঁজতে হবে!</p>
              <p>ডেটাবেজ থেকে একের অধিক শর্ত অনু্যায়ী ডেটা খুঁজতে <b>AND</b> এবং <b>OR</b> অপারেটর দুটি ব্যবহার করা হয়।</p>
              <p><b>AND -</b> অপারেটর দিয়ে যুক্ত সব শর্ত যেসব রেকর্ড পূরন করবে সেগুলোই সিলেক্ট হবে।</p>
              <p><b>OR -</b> অপারেটর দিয়ে যুক্ত শর্ত গুলোর যেকোন একটি সত্য হলেই সে রেকর্ডটি সিলেক্ট হবে।</p>
              </div>
            <div class="topic-parts-imp">
              <p>AND ব্যবহারের সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> column_name, column_name<br><b>FROM</b> table_name;<br><b>WHERE</b> column_name operator value <b>AND</b> column_name operator value;</p>
              <br>
              <p>OR ব্যবহারের সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> column_name, column_name<br><b>FROM</b> table_name;<br><b>WHERE</b> column_name operator value <b>OR</b> column_name operator value;</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">AND operator উদাহারণ</p><hr>
              <p>নিচে AND অপারেটরের উদাহরণ দেখানো হলঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> table_name;<br><b>WHERE</b> District = 'Kushtia' <b>AND</b> Section = 'Science';</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে Students_Information টেবিল থেকে সেই ডেটাগুলো সিলেক্ট হবে যেগুলো আমাদের দেওয়া দুটি শর্তই পূরণ করে।</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/7.png" alt="">
              <br><br><p>তাহলে দেখা যাচ্ছে একমাত্র প্রথম রো-টিই আমাদের দেওয়া দুটি শর্ত পূরণ করেছে। তাই এই রো এর সবগুলো ডেটা প্রদর্শিত হয়েছে।</p>
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">OR operator উদাহারণ</p><hr>
              <p>নিচে AND অপারেটরের উদাহরণ দেখানো হলঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> table_name;<br><b>WHERE</b> District = 'Rajshahi' <b>OR</b> Section = 'Science';</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে Students_Information টেবিল থেকে সেই ডেটাগুলো সিলেক্ট হবে যেগুলো আমাদের দেওয়া দুটি শর্তের যেকোন একটি পূরণ করে।</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/8.png" alt="">
              <br><br><p>তাহলে দেখা যাচ্ছে টেবিল থেকে দুটি রো আমাদের দেওয়া দুটি শর্তের মধ্যে অন্তত যেকোন একটি পূরণ করেছে। তাই এই দুটি রেকর্ড প্রদর্শিত হয়েছে।</p>
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