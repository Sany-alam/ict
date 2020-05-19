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
            <a href="#">৩.৫.১ NOR গেইট ব্যবহার করে বিশেষ গেইট তৈরী</a>
          </div>
          <!-- box body -->
          <div class="page-body">
            <div class="topic-parts-imp">
              <p>কোনো ফাংশনকে NOR গেইট এর উপযুক্ত করতে দুইবার NOT করতে হয় এবং ভিতরের NOT এর কাজ করতে হয়। </p>
              <p>আমরা জানি NOT কে ফাংশনে bar দিয়ে প্রকাশ করা হয়। তাই আমরা বলতে পারি কোনো ফাংশনকে NOR গেইট দিয়ে তৈরির উপযুক্ত করতে ফাংশনে দুটি bar যুক্ত করতে হবে এবং ভিতরের bar এর কাজ করতে হবে। পর পর দুটি bar দিলে অর্থাৎ পর পর দুইবার NOT করলে ফাংশনের মানের পরিবর্তন হয়না ( <span>A</span> = A )</p>
            </div>
            
            <div class="topic-parts">
              <p class="question text-light-primary">NOR gate দিয়ে XOR gate</p><hr>
              <hr>
              <p>XOR গেইটের সাধারন লজিক ফাংশন হলঃ</p>
              <p style="text-align:center;">F = A ⊕ B <br>= <span>A</span> . B + A . <span>B</span></p>
              <p>উপরের ফাংশনটিকে দুইবার NOT করে সরল করা হল নিচে:</p>
              <p><b>ধাপ সমূহ</b></p>
              <img class="col-sm-12 col-md-10 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.5.1/lg1.png" alt="">
              <br><br>
              <p>উপরের সরলকৃত ফাংশন NOR গেইট দিয়ে তৈরির উপযুক্ত। কারন, লক্ষ করলে দেখা যাবে ফাংশনটিতে NOR গেইটের সাধারন ফাংশন <span>A + B</span> আছে শুধু।</p>
              <p>উপরের ফাংশনটির লজিক চিত্র নিচে দেয়া হলঃ</p>
              <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo14.MP4" type="video/mp4"></video>
            </div>

            <div class="topic-parts">
              <p class="question text-light-primary">NOR gate দিয়ে XNOR gate</p><hr>
              <hr>
              <p>XNOR গেইটের সাধারন লজিক ফাংশন হলঃ</p>
              <p style="text-align:center;">F = <span>A ⊕ B</span> <br>= <span>A</span> . <span>B</span> + A . B</p>
              <p>উপরের ফাংশনটিকে দুইবার NOT করে সরল করা হল নিচে:</p>
              <p><b>ধাপ সমূহ</b></p>
              <img class="col-sm-12 col-md-10 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.5.1/lg2.png" alt="">
              <br><br>
              <p>উপরের সরলকৃত ফাংশন NOR গেইট দিয়ে তৈরির উপযুক্ত। কারন, লক্ষ করলে দেখা যাবে ফাংশনটিতে NOR গেইটের সাধারন ফাংশন <span>A + B</span> আছে শুধু।</p>
              <p>উপরের ফাংশনটির লজিক চিত্র নিচে দেয়া হলঃ</p>
              <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo15.MP4" type="video/mp4"></video>
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