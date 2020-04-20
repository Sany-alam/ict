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
            <a href="#">৩.২ সার্বজনীন গেইট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
                <p class="question text-light-primary">NOR gate</p><hr>
                <p>NOR gate এর দুই বা দুয়ের অধিক ইনপুট এবং একটি আউটপুট থাকে। একটি OR গেইট এর আউটপুটে একটি NOT গেইট যুক্ত করলে NOR গেইট তৈরি হয়।</p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি NOR gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo4.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য NOR gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.2/lg1.png" alt="">
                <p>উপরের সত্যাক সারণিতে 2 টি ইনপুটের জন্য OR গেইটের আউটপুট (A+B) দেখানো হয়েছে। OR গেইটের আউটপুটকে NOT করলে NOR পাওয়া যায়, তাই শেষ কলামে OR গেইটের ফলাফল কে NOT করা হয়েছে  <span>(A+B)</span>,  যা হল NOR গেইটের আউটপুট।</p>
              </div>

              <div class="topic-parts-imp">
                <p class="question text-light-primary">NAND gate</p><hr>
                <p>NAND gate এর দুই বা দুয়ের অধিক ইনপুট এবং একটি আউটপুট থাকে। একটি AND গেইটের আউটপুটে একটি NOT গেইট যুক্ত করলে NAND গেইট তৈরি হয়।</p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি NAND gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo5.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য NAND gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.2/lg2.png" alt="">
                <p>উপরের সত্যাক সারণিতে 2 টি ইনপুটের জন্য AND গেইটের আউটপুট (A.B) দেখানো হয়েছে। AND গেইটের আউটপুটকে NOT করলে NAND পাওয়া যায়, তাই শেষ কলামে AND গেইটের ফলাফল কে NOT করা হয়েছে  <span>(A.B)</span>, যা হল NAND গেইটের আউটপুট।</p>
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