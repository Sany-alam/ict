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
            <a href="#">৪.৫ &lt;head&gt; এর ট্যাগ সমূহ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts">
              <p class="question text-light-primary">HTML head tag এর কিছু element tag এর সাথে পরিচিতি</p><hr>
              <p>আগের ধাপে জেনেছি যে HTML ডকুমেন্টে HEAD ট্যাগের ভিতর ওয়েবপেজ সম্পর্কিত বিভিন্ন তথ্য দেয়া হয়। তথ্য গুলোর ভিতর থাকতে পারে ওয়েবসাইট/ওয়েবপেজ সম্পর্কিত তথ্য (যেমনঃ ওয়েব সাইটের title, সাইটের author এর নাম ইত্যাদি)। এখানে আরো থাকে ওয়েবপেজের ডিজাইন সম্পর্কিত তথ্য এবং আরো অনেক কিছু; যে গুলো ওয়েব-ব্রাউজার এ সরাসরি দেখাবেনা। তবে পাতার উপর প্রভাব রাখবে।</p>
              <p>নিচে &lt;head&gt; tag এর ভিতর ব্যবহৃত হয় এরকম কিছু HTML element tag এর পরিচয় দেয়া হল।</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;title&gt; tag</p><hr>
              <p>ওয়েব সাইটের টাইটেল নির্দিষ্ট করে দেয়া যায় এ ট্যাগ দিয়ে। টাইটেল দেখা যায় টাইটেল বারে। টাইটেল বার হচ্ছে প্রত্যেক উইন্ডোর উপরের বারটি, যেখানে উইন্ডোটি বন্ধ, মিনিমাইজ, ম্যাক্সিমাইজ করার বাটন থাকে।</p>
              <p>উদাহরণ কোডঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;head&gt;<br>
                    &nbsp;&nbsp;&lt;title&gt;My website title&lt;/title&gt;<br>
                    &lt;/head&gt;<br>
                </h1>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;link /&gt; tag</p><hr>
              <p>বাইরের কোনো সোর্স থেকে কিছু (স্টাইল শিট, ফ্যাভিকন ইত্যাদি) লোড করার জন্য এ tag টি ব্যবহার করা হয়। উপরে style.css নামের একটি স্টাইল শিট যুক্ত করার উদারহন দেয়া হয়েছে।</p>
              <p>উদাহরণ কোডঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;head&gt;<br>
                    &nbsp;&nbsp;&lt;link rel="stylesheet" type="text/css" href="style.css" /&gt;<br>
                    &lt;/head&gt;<br>
                </h1>
            </div>
            <div class="topic-parts-imp">
                <p>স্টাইল শিট হচ্ছে এমন একটি ফাইল যেখানে ওয়েব সাইটটির ডিজাইন কেমন হবে তা সম্পর্কিত তথ্য থাকে, যা লিখা হয় সিএসএস ভাষায় দিয়ে।</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;meta /&gt; tag</p><hr>
              <p>বিভিন্ন metadata তথ্য দিতে এ tag টি ব্যবহার করা হয়। metadata হচ্ছে এইচটিএমএল ডকুমেন্টটি সম্পর্কিত তথ্য। যেমনঃ ওয়েব সাইটের বণর্না, ওয়েবসাইটের লেখক, ওয়েবসাইটের কি-ওয়ার্ড ইত্যাদি।</p>
              <p>নিচের উদাহরণ কোডটি দিয়ে কি-ওয়ার্ড যুক্ত করা যায় এইচটিএমএল পাতায়। অনুসন্ধান ইঞ্জিন (যেমনঃ Google) এর জন্য কি-ওয়ার্ড এভাবে নির্দিষ্ট করে দেয়া যায়, ফলে অনুসন্ধান ইঞ্জিন বুঝতে পারে সাইটটি আসলে কিসের।</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;head&gt;<br>
                    &nbsp;&nbsp;&lt;meta name="description" content="An interactive learning App."&gt;<br>
                    &lt;/head&gt;<br>
                </h1>
            </div>
            <div class="topic-parts">
                <p>পেজের লেখক (author) কে তা নিচের মত কোড দিয়ে নির্দিষ্ট করে দেয়া যায়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;head&gt;<br>
                    &nbsp;&nbsp;&lt;meta name="author" content="Md Karim Hossain"&gt;<br>
                    &lt;/head&gt;<br>
                </h1>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;script&gt; tag</p><hr>
              <p>HTML ডকুমেন্টের ভিতর JavaScript কোড লিখতে এ tag টি ব্যবহার করা হয়। JavaScript হল একটি ওয়েব প্রোগ্রামিং ভাষা।</p>
              <p>উদাহরণ কোডঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;script&gt;</h1>
                <h2>&nbsp;&nbsp;/* JavaScript things */</h2>
                <h1>&lt;/script&gt;</h1>
            </div>
            <div class="topic-parts">
                <p class="question text-light-primary">&lt;style&gt; tag</p><hr>
                <p>HTML ডকুমেন্টের ভিতর CSS অর্থাৎ Style নির্দিষ্ট করার জন্য এ tag ব্যবহৃত হয়।</p>
                <p>উদাহরণ কোডঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;style&gt;</h1>
                <h2>&nbsp;&nbsp;/* style things */</h2>
                <h1>&lt;/style&gt;</h1>
                </h1>
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