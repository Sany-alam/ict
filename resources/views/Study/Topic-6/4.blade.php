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
            <a href="#">৬.৩ SELECT স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">SELECT স্টেটমেন্ট</p><hr>
              <p>ডেটাবেজ থেকে কোন ডেটা সিলেক্ট করার জন্য <b>SELECT</b> স্টেটমেন্টটি ব্যবহার করা হয়। সিলেক্ট করা বলতে ডেটা গুলো সিলেক্ট করে দেখানো বুঝায়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>এটি লিখা হয় নিচের মত করেঃ</p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> column_name1, column_name2<br><b>FROM</b> table_name;</p>
              <p>ডেটাবেজের টেবিল থেকে কোন নির্দিষ্ট কলাম সিলেক্ট করতে উপরের মত করে স্টেটমেন্ট লিখা হয়।</p>
              <p>ডেটাবেজ থেকে সবগুলো কলাম অর্থাৎ সম্পূর্ণ টেবিলটিই সিলেক্ট করে প্রদর্শন করতে নিচের মত করে SELECT স্টেটমেন্টটি ব্যবহার করা হয়ঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> table_name;</p>
              <p>ডেটাবেজ থেকে সবগুলো কলাম অর্থাৎ সম্পূর্ণ টেবিলটিই সিলেক্ট করতে দ্বিতীয় স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরন ১</p><hr>
              <p>নিচের স্টেটমেন্টটি Students_Information টেবিল থেকে Name এবং District কলামগুলো সিলেক্ট করবে</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> Name, District<br><b>FROM</b> Students_Information;</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে আমাদের output আসবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap6/4.png" alt="">
              <br><br><p>এখন টেবিল থেকে শুধুমাত্র Name এবং District কলাম এবং কলামের ভ্যালুগুলো দেখা যাবে।</p>
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরন ২</p><hr>
              <p>নিচের স্টেটমেন্টটি Students_Information টেবিল থেকে সবগুলো কলাম সিলেক্ট করবে</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information;</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে আমাদের output আসবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
              <br><br><p>এখন টেবিল থেকে সবগুলো কলাম এবং কলামের ভ্যালুগুলো দেখা যাবে।</p>
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