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
            <a href="#">৪.৩ HTML ফাইল তৈরি</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">এইচটিএমএল লিখতে যা প্রয়োজন বা এইচটিএমএল এডিটর</p><hr>
                  <p>এইচটিএমএল লিখার জন্যে প্রয়োজন হবে টেক্সট এডিটর এর। বিভিন্ন এডিটর চাইলে ব্যবহার করা যায়, যেমনঃ</p>
                  <ol>
                      <li>Adobe Dreamweaver</li>
                      <li>Brackets</li>
                      <li>Notepad ইত্যাদি।</li>
                    </ol>
                    <p>তবে নোটপ্যাড দিয়ে শুরু করাই সবচেয়ে ভাল। নিচে কিভাবে প্রাথমিক ভাবে নোটপ্যাড দিয়ে এইচটিএমএল লিখা শুরু করতে পার তা ধাপে ধাপে দেখানো হল।</p>
                </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ১</p><hr>
                  <p class="">কম্পিউটার হতে Notepad খুলো এভাবেঃ </p>
                  <p style="color : #607d8b!important;">Start Menu > All Programs > Accessories > Notepad</p>
                  <p>অথবা, </p>
                  <p style="color : #607d8b!important;">Run (Windows Key + R) চালু করে লিখ "notepad" এবং Enter চাপ।</p>
                </div>
                <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ২</p><hr>
                  <p class="">এবার নোডপ্যাডে নিচের ছবিতে দেখানো কোড গুলো লিখুনঃ </p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap4/1.png" alt="">
                </div>
                <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ৩</p><hr>
                  <p class="">এবার ফাইলটি Save করতে <b>"File"</b> মেনু থেকে <b>"Save as..."</b> এ ক্লিক করুন। </p>
                  <p class="">এবার Save As ডায়লগবাক্সে নিচের মত সব সেটিং করুনঃ </p>
                  <ul>
                  <li><b>File name:</b> first web page.html</li>
                  <li><b>Save as type:</b> All Files (".")</li>
                  <li><b>Encoding:</b> UTF-8</li>
                  </ul> 
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap4/2.png" alt="">
                </div>
                <div class="topic-parts-imp">            
                  <p class="">দ্রষ্টব্যঃ HTML ফাইল এক্সটেনশন হবে html। অর্থাৎ ফাইল সেভ করার সময় নামের শেষে অবশ্যই <b>.html</b> দিতে হবে।</p>
                </div>
                <div class="topic-parts">
                  <p class="question text-light-primary">ধাপ ৪</p><hr>
                  <p class="">এবার সেভ করা ফাইলটি ডাবল-ক্লিক করে খোলো। এটি তোমার কম্পিউটারে ইনস্টল করা কোনো ইন্টারনেট ব্রাউজারে চালু হবে এবং সব ঠিক করলে নিচের মত ফলাফল দেখা যাবে। </p>
                  <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap4/3.png" alt="">
                  <p class="">পরবর্তী অধ্যায়গুলোতে আমরা উপরের নোটপ্যাড এর লিখাগুলো নিয়ে আলোচনা করব। </p>
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