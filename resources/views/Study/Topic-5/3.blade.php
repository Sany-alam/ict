<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- required css files -->
    <!-- bootstrap css files -->
    <link rel="stylesheet" href="../../assets/css/app.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- required javascripts -->
    <script src="../../assets/js/vendors.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>

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
            <a href="#">5.2 Topic - ডাটাটাইপ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">ডাটাটাইপ ও এর প্রকারভেদ</p>
                  <p class="">সি ভাষায় ৩ ধরনের প্রাথমিক ডাটাটাইপ রয়েছে। এগুলো হলঃ</p>
                  <ol>
                      <li>ক্যারেক্টার (Character)</li>
                      <li>পূর্ণসংখ্যা (Integer)</li>
                      <li>ভগ্নাংশযুক্ত সংখ্যা (Fraction)</li>
                  </ol>
              </div>
              <div class="topic-parts">
                  <p class=""><b>এখন মনে প্রশ্ন জাগতে পারে ডাটাটাইপ এর কাজ কি? ডাটাটাইপ কেন লাগে?</b>
                    প্রোগ্রামিং এ আমরা বিভিন্ন ধরনের ডেটা নিয়ে কাজ করি, যেমন, সংখ্যা- পূর্ন সংখ্যা (Integer), ভগ্নাংশ (Fraction), লেখা (String) ইত্যাদি। প্রোগ্রাম এগুলো নিয়ে কাজ করতে চাইলে শুরুতে ডেটা গুলো কম্পিউটারের RAM (Random Access Memory) এ জমা রাখতে হয়। RAM এ জমা রাখতে হলে কম্পিউটারকে বলে দিতে হয় ডেটা কতটুকু যায়গা দখল করবে অর্থাৎ ডেটার ধরন কিরকম? এ জন্যই আমারদের ডেটার ধরন অর্থাৎ ডেটা টাইপ জানতে হবে।</p>
              </div>
              <div class="topic-parts">
                    <p class="question text-light-primary">অক্ষর (Character)</p>
                    <p class="">
                    যে কোনো ইংরেজি বর্ণমালা, অংক, সাংকেতিক চিহ্ন ইত্যাদি যেকোনো এক বাইট এর তথ্য বা ডেটা কে ক্যারেক্টার বলা যায়। ক্যারেক্টার এর কি ওয়ার্ড char। char ডাটা সংরক্ষন এর জন্য ১ বাইট বা ৮ বিট জায়গা দখল করে এবং এর ভ্যালু রেঞ্জ ০ থেকে ২৫৫ অথবা -১২৮ থেকে ১২৭।
                    </p>
              </div>
              <div class="topic-parts">
                    <p class="question text-light-primary">পূর্ণসংখ্যা (Integer)</p>
                    <p class="">যেকোনো ধনাত্বক ও ঋনাত্বক পূর্ণসংখ্যা কে সংরক্ষন এর জন্য পূর্ণসংখ্যা বা ইন্টিজার ডেটাটাইপ ব্যবহার করা হয়। এর কি ওয়ার্ড int। int মেমরিতে ২ বাইট বা ১৬ বিট, কম্পাইলার ভেদে ৪ বাইট বা ৩২ বিট জায়গা দখল করে। ২ বাইট এর ক্ষেত্রে এর ভ্যালু রেঞ্জ -৩২৭৬৮ থেকে ৩২৭৬৭ এবং ৪ বাইট এর ক্ষেত্রে এর ভ্যালু রেঞ্জ -২১৪৭৪৮৩৬৪৮ থেকে ২১৪৭৪৮৩৬৪৭।</p>
              </div>
              <div class="topic-parts">
                    <p class="question text-light-primary">ভগ্নাংশযুক্ত সংখ্যা (Float & Double)</p>
                    <p class="">
                        দশমিক/ভগ্নাংশ যুক্ত সংখ্যা গুলো কে এই ডেটাটাইপ এর অন্তর্ভুক্ত করা হয়। এই ধরনের ডেটা রাখার জন্য দুইটি ডাটাটাইপ রয়েছেঃ<br>
                        <b>float টাইপ</b><br>
                        <b>double টাইপ</b><br>
                        এখানে float এবং double এর মধ্যে পার্থক্য হল float মেমরিতে ৪ বাইট জায়গা দখল করে এবং এর ভ্যালু রেঞ্জ 1.2×10−38 থেকে 3.4×1038, আর double মেমরিতে ৮ বাইট জায়গা দখল করে এবং এর ভ্যালু রেঞ্জ 2.3×10−308 থেকে 1.7×10308।</p>
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