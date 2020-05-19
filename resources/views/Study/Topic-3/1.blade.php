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
            <a href="#">৩. লজিক গেইট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                <p>বুলিয়ান অ্যালজেবরার ব্যবহারিক প্রয়োগের জন্য ডিজিটাল ইলেকট্রনিক সার্কিট ব্যবহার করা হয়, সেগুলোকে লজিক গেইট বলে। লজিক গেইটের বৈশিষ্ট্য হচ্ছে এগুলো এক বা একধিক যুক্তি ভিত্তিক সংকেত ইনপুট গ্রহন করে এবং একটি মাত্র যুক্তি ভিত্তিক সংকেত আউটপুট দেয়।</p>
                <p>আমরা বুলিয়ান অ্যালজেবরায় যে যৌক্তিক যোগ এবং যৌক্তিব গুন করেছি সেগুলো লজিক গেইট ব্যবহার করা ডিজিটাল সার্কিটে ব্যবহার করা যায়।</p>
                <p>লজিক গেইটের প্রকারভেদ নিচে দেয়া হলঃ</p>
                <ol>
                  <li>মৌলিক গেইট (Basic Gate)</li>
                  <li>সার্বজনীন গেইট (Universal Gate)</li>
                  <li>বিশেষ গেইট (Special Gate)</li>
                </ol>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">মৌলিক গেইট (Basic Gate)</p><hr>
                <p>বুলিয়ান অ্যালজেবরার মৌলিক কাজ গুলো (যৌক্তিক যোগ, যৌক্তিক গুন এবং পুরক) যে সব গেইট দিয়ে করা হয় সেগুলোকে মৌলিক লজিক গেইট বলে।</p>
                <p>মৌলিক লজিক গেইট তিনটি। এগুলো হলঃ</p>
                <ol>
                  <li>OR (যৌক্তিক যোগ)</li>
                  <li>AND (যৌক্তিক গুন)</li>
                  <li>NOT (পুরক)</li>
                </ol>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">সার্বজনীন গেইট (Universal Gate)</p><hr>
                <p>কিছু গেইট আছে যে গুলো দিয়ে সব ধরনের গেইট এমন কি মৌলিক গেইটও তৈরি করা যায় সে গেইট গুলোকে সার্বজনীন গেইট বলে।</p>
                <p>সার্বজনীন গেইট দুইটি। এগুলো হলঃ</p>
                <ol>
                  <li>NAND</li>
                  <li>NOR</li>
                </ol>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">বিশেষ গেইট (Special Gate)</p><hr>
                <p>তুলনা, যোগ ইত্যাদি নির্দিষ্ট কিছু কাজের জন্য যে গেইট গুলো ব্যবহার করা হয় সেগুলোকে বলে বিশেষ গেইট।</p>
                <p>বিশেষ গেইট দুইটি। সেগুলো হলঃ</p>
                <ol>
                  <li>XOR (eXclusive OR)</li>
                  <li>XNOR (NOT of the eXclusive OR)</li>
                </ol>
              </div>
              <div class="topic-arrow-buttons">
                  
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