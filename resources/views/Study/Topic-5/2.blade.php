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
            <a href="#">5.1 Topic - সূচনা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <!-- <p class="question text-light-primary">Question is here?</p> -->
                  <p class="">প্রোগ্রামিং অর্থ হচ্ছে কম্পিউটারকে কোন একটা কাজ কিভাবে করতে হবে তা বলে দেয়া। নিচে সি ভাষার প্রোগ্রামের বিভিন্ন অংশের পরিচয় দেওয়া হল। প্রতিটি অংশের বিস্তারিত বর্ণনা পরবর্তী অধ্যায় গুলোতে দেওয়া হয়েছে।</p>
                  <p class="">#include< stdio.h><br>
<br>
                    // এটি একটি মন্তব্য<br>
                    <br>
                    /*<br>
                    এটি একটি দুই<br>
                    লাইন মন্তব্য<br>
                    */<br>
                    <br>
                    int main()<br>
                    {<br>
                        // সব কোড এখানে লিখতে হবে।<br>
                    <br>
                        return 0;<br>
                    }</p>
                  <p class="">সি ভাষায় লেখা যে কোনো প্রোগ্রামে উপরের অংশ গুলো লিখতে হয়। এখানে "//" দিয়ে এবং "/* ... /" দিয়ে লিখা অংশ গুলো হল মন্তব্য, যা আসলে মূল প্রোগ্রামের কিছু না। এগুলো ব্যবহার করা হয় প্রোগ্রামের বিভিন্ন অংশের বণর্না লিখতে বা মন্তব্য দিতে। এক লাইনের মন্তব্য লিখতে "//" এবং একাধিক লাইনের মন্তব্য লিখতে "/ ... */" ব্যবহার করা হয়।

                    1 নং লাইনের কোড দিয়ে stdio.h নামে একটি ফাইল আমাদের প্রোগ্রামে যুক্ত (include) করা হয়েছে। এ ফাইল গুলোকে হেডার ফাইল বলা হয়, তাই এদের extension হচ্ছে ".h"। যেখানে কিছু রেডি করা ফাংশন আছে, যেগুলো ব্যবহার করে আমরা সি প্রোগ্রামে ইনপুট-আউটপুট দেয়া-নেয়া করতে পারব।
                    
                    stdio = standard input output
                    10 নং লাইনে int main() হল সি প্রোগ্রামের প্রধান ফাংশন, সি প্রোগ্রাম চালু হলে এ ফাংশনের ভিতরের কোড গুলো আগে চালু (execute) হয়। int main() এর পরেই দ্বিতীয় বন্ধনী "{ ... }" এর ভিতরে এ ফাংশনের কাজ গুলো লিখতে হয়।
                    
                    14 নং লাইনের return 0; অবশ্যই লিখতে হবে।
                    
                    উপরের প্রতিটি অংশের বিস্তারিত বণর্না পাওয়া যাবে সামনের অধ্যয় গুলোতে।
                    
                    নিচে একটি উদাহরণ প্রোগ্রাম দেখানো হল। যার কাজ হবে "Hello Bangladesh!" আউটপুট দেয়া।</p>
                  <p class="">#include<stdio.h>
<br>
                    int main()<br>
                    {<br>
                        printf("Hello Bangladesh!");<br>
                    <br>
                        return 0;<br>
                    }</p>
                  <p class="">ফলাফল : Hello Bangladesh!<br>
                    উপরের প্রোগ্রামটি execute করলে অর্থাৎ চালু করলে ফলাফল অংশের লেখাটি দেখাবে।
                    
                    এখানে printf() একটি আউটপুট ফাংশন, যা stdio.h হেডার ফাইলে আছে। সামনের অধ্যয়ে এ নিয়ে বিস্তারিত পাওয়া যাবে।</p>
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