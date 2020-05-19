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
            <a href="#">৪.৮ ছবি যুক্ত করা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts">
              <p class="question text-light-primary">ইমেজ ট্যাগ</p><hr>
              <p>এখন আমরা শিখব, কিভাবে আমরা এইচটিএমএল পাতায় ছবি যুক্ত করতে পারি।</p>
              <p>&lt;img&gt; ট্যাগ ব্যবহার করে আমরা ছবি যুক্ত করতে পারি। এটি একটি সিঙ্গেল ট্যাগ, এর কোন ক্লোজিং ট্যাগ নেই।</p>
              <p>এই ট্যাগ এর মধ্যে বিভিন্ন এট্রিবিউট ব্যবহার করে আমরা ছবি যুক্ত করব।</p>
            </div>
            <div class="topic-parts-imp">
              <p class="question text-light-primary">এট্রিবিউট (attribute) কি?</p><hr>
              <p>কোনো ট্যাগের &lt;tag এবং &gt; এর ভিতর, অর্থাৎ &lt;tag ... &gt; এর ... এর স্থানে যে তথ্য দেয়া হয় সেগুলোকেই attribute বলা হয়।</p>
            </div>
            
            <div class="topic-parts">
              <p>ইমেজ ট্যাগের কিছু এট্রিবিউট সম্পর্কে আমরা নিচে জানার চেষ্টা করি।</p>
              <p class="question text-light-primary">ক. src অ্যাট্রিবিউট</p><hr>
              <p>ইমেজ ট্যাগের মূল অ্যাট্রিবিউট হচ্ছে src। যেটার সাহায্যে ইমেজের অবস্থান (location) দেখিয়ে দেওয়া হয়।</p>
              <p>যেমনঃ</p>
            </div>
            
            <div class="topic-parts-code">
                <h1>src="example.jpg"<br>
                src="Image/example.jpg"  [ইমেজটি ভিন্ন কোন ফোল্ডারে থাকলে]<br>
                src="http://domainname.com/example.jpg"  [অন্য কোন ওয়েবপেজে থাকা ইমেজ ব্যবহার করলে]<br></h1>
            </h1>
            </div>
            <div class="topic-parts">
                <p>এখানে <b>example.jpg</b> হচ্ছে ছবির ফাইলের নাম।</p>
              <p>নিচের একটি উদাহরণ দেওয়া হল। নিচের ব্যক্তিটি ফেসবুক তৈরী করেছেন।</p>
              <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap4/mark-zuckerberg.jpg" alt=""><br><br>
              <p class="question text-light-primary">খ. alt অ্যাট্রিবিউট</p><hr>
              <p>alt এসেছে alter থেকে, অর্থাৎ ইমেজ যদি কোনো কারনে দেখানো না যায় তাহলে ইমেজটি কিসের ছিল তা জানার জন্য একটি লেখা দেখানো যায় এ এট্রিবিউট দিয়ে। এছাড়া অনুসন্ধান ইঞ্জিন (যেমনঃ গুগল ইত্যাদি) ওয়েবসাইটকে কোনো ছবি কিসের তা জানানোর জন্যও এ এট্রিবিউট কাজে লাগে।</p>
              <p>নিচের উদাহরণে দেয়া ছবিটি লোড করা যায়নি, তাই ফলাফলে alt এট্রিবিউটের লিখাটি দেখা যাচ্ছেঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;img src="apple.jpg" alt="an apple" &gt;</h1>
            </div>
            <div class="topic-parts">
                 <img class="col-sm-12 col-md-4 responsive" src="apple.jpg" alt="an apple"><br><br>
                 <p class="question text-light-primary">গ. width ও height অ্যাট্রিবিউট</p><hr>
              <p>একটি ইমেজের সাইজ কত হবে সেটি নির্দেশ করা হয় এদের দ্বারা।এদের মান প্রকাশ করা হয় পিক্সেলে। width মানে প্রস্থ আর height মানে উচ্চতা।</p>
              <p>উদাহরণঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;img src="img/mark-zuckerberg.jpg" alt="Mark Zuckerberg" width="128" height="128"  &gt;</h1>
            </div>
            <div class="topic-parts">
            <img class="col-sm-12 col-md-4" src="{{ asset('assets') }}/images/chapter/chap4/mark-zuckerberg.jpg" alt="" style="width:128px!important; height:128px!important;"><br><br>
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