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
            <a href="#">৬.৯ ALTER কী-ওয়ার্ড</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">ALTER কী-ওয়ার্ড</p><hr>
              <p>ডেটাবেজের টেবিলে কোন নতুন কলাম যোগ, পুরানো কলাম মুছে ফেলা বা অন্য কোন পরিবর্তন সাধনের জন্য <b>ALTER TABLE</b> স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>ALTER TABLE ব্যবহার করার সাধারণ নিয়মঃ</p>
              <p>টেবিলে নতুন কলাম যোগ করার ক্ষেত্রেঃ</p><hr>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> table_name<br><b>ADD</b> column_name datatype</p>
              <p>টেবিল থেকে কোন কলাম মুছে ফেলার ক্ষেত্রেঃ</p><hr>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> table_name<br><b>DROP COLUMN</b> column_name</p>
              <p>কোন কলামের ডেটা টাইপ পরিবর্তন করার সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> table_name<br><b>ALTER COLUMN</b> column_name datatype</p>
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
              <p>ধরা যাক আমরা Students_Information টেবিলে GPA নামের নতুন কলাম যোগ করতে চাই। তাহলে নিচের কমান্ডটি দেখা যাক</p>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> Students_Information<br><b>ADD COLUMN</b> GPA FLOAT(5,2)</p> 
              </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/15.png" alt="">
              </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহারণ ২</p><hr>
              <p>আমরা চাইলে কোন কলামের ডেটা টাইপ আবার পরিবর্তন করতে পারি। এক্ষেত্রে নিচের কমান্ডটি দেখা যাকঃ</p>
              <p style="color : #607d8b!important;"><b>ALTER TABLE</b> Students_Information<br><b>MODIFY COLUMN</b> Tution_Fees DECIMAL(5,2)</p>
              <p>এর ফলে এখন Tution_Fees কলামে দশমিকযুক্ত সংখ্যা রাখা যাবে। সংখ্যাটির সম্পূর্ণ দৈর্ঘ্য হবে ৫ ঘর অর্থাৎ দশমিকের আগে ৩ ঘর এবং পরে ২ ঘর।</p>
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