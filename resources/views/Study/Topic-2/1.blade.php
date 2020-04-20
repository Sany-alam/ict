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
            <a href="#"># বিট নিয়ে সবকিছু</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
          <p class="question text-light-primary">বিট</p><hr>
          <p>বিট, bit বা BIT, এটি এসেছে <b>b</b>inary dig<b>it</b> থেকে।<br>ডিজিট মানে অংক। বাইনারি মোট অংক দুটি, 0 এবং 1 কে Binary Digit বা সংক্ষেপে Bit বলা হয়।</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">কমপিউটার কেন বাইনারিতে কাজ করে?</p><hr>
          <p>কম্পিউটার একটি ইলেক্ট্রনিক যন্ত, যা কাজ করে বিদ্যুৎ বা তড়িৎ প্রবাহের মাধ্যমে। <br>বিদ্যুতের দুটি অবস্থা হতে পারেঃ বিদ্যুত আছে, বিদ্যুত নেই (লোডশেডিং)! বিদ্যুত আছে কে তুলানা করা যায়ঃ ON, True ইত্যাদির সাথে। আবার বিদ্যুত নেই একে তুলনা করা যায়ঃ OFF, False ইত্যাদির সাথে। <br>তো দেখা যাচ্ছে বিদ্যুতেরও দুটি অবস্থা হতে পারে। এটি বাইনারি 0 এবং 1 এর সাথে মিলানো যায়। এ মিলের কারনেই কম্পিউটার অন্য সংখ্যা পদ্ধতি থেকে বাইনারি সংখ্যা পদ্ধতিতে সহযে কাজ করতে পারে, যদিও আমাদের কাছে বাইনারি কিছুটা জটিল!</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">বাইনারি সংখ্যার বৈদ্যুতিক মান</p><hr>
          <p>সরাসরি বিদ্যুতের OFF অবস্থাকে 0 না ধরে কম ভোল্টেজ (Low Voltage) কে 0 এবং বেশী ভোল্টেজ (High Voltage) কে 1 ধরা হয়।</p>
          <p>0 থেকে 0.8 ভোল্টেজকে 0 এবং 2 থেকে 5 ভোল্টেজকে 1 ধরা হয়।</p>
          <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap2/vdo/vdo1.MP4" type="video/mp4"></video>
          </div> 
          <div class="topic-parts">
          <p class="question text-light-primary">8 bit রেজিস্টার</p><hr>
          <p>কম্পিউটারে সব ডেটা বাইনারি 0 এবং 1 দিয়ে সংরক্ষন করা হয়। কম্পিউটারে সাময়িক ডেটা সংরক্ষনের জন্য রেজিস্টার ব্যবহার করা হয়, যা কম্পিউটারের প্রোসেসর ব্যবহার করে। রেজিস্টারের আকার হয় 2n bit, এখানে n = 1, 2, 3, ... হতে পারে। যেমনঃ 23 = 8 bit ইত্যাদি।</p>
          <p>যোগ-বিয়োগ সহ সব ধরনের গানিতিক এবং যুক্তিমূলক কাজের জন্য বাইনারি সংখ্যা সমূহ রেজিস্টারে জমা থাকে।</p>
          <p style="font-size:18px;"><b>00010100</b></p>
          <p>উপরের বাইনারি সংখ্যাটি থেকে বলা যায়, সংখ্যাটি 8 bit রেজিস্টারে সংরক্ষন করা আছে। পরিক্ষায় যোগ-বিয়োগ সহ সব গাণিতিক কাজে রেজিস্টারের আকার বলে না দিলে 8 bit ধরে নিয়ে গাণিতিক কাজ গুলো করতে হবে।</p>
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