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
            <a href="#">5.3 Topic - ভ্যারিয়েবল</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">ভ্যারিয়েবল কি? ও কিভাবে ভ্যারিয়েবল ঘোষনা করা হয়?</p>
                  <p class="">Variable মানে চলক। যার মান পরিবতর্ন হয় তাকেই চলক বা ভেরিয়েবল বলে।</p>
                  <p class="">সি ভাষায় ডেটা নিয়ে কাজ করার জন্য ভ্যারিয়েবল ব্যবহার করতে হয়। ডেটা গুলোকে বিভিন্ন ভ্যারিয়েবল এ সংরক্ষন করে কাজ করতে হয়।</p>
                  <p class="">ভ্যারিয়েবল ঘোষনা বা ডিক্লারেশন এর জন্য ডাটাটাইপ প্রয়োজন। আমাদের কাজের জন্য যে টাইপ এর ডেটা দরকার সেই ডেটাটাইপ লিখে এর সাথে যেকোনো নাম দিলেই ভ্যারিয়েবল ডিক্লারেশন হয়ে যাবে এবং প্রোগ্রাম চালু করা হলে ডেটাটাইপ অনুযায়ী সেই ভ্যারিয়েবলের জন্য মেমরিতে জায়গা দখল করবে প্রোগ্রাম। যেমনঃ যদি পূর্ণসংখ্যা ডাটা নিয়ে কাজ করতে চাই তাহলে int ডাটাটাইপ দিয়ে ভ্যারিয়েবল ঘোষনা করতে হবে, যা মেমোরিতে ৪ বাইট যায়গা দখল করবে।</p>
                  <p class="">নিচে প্রথম লাইনে age নামে একটি variable ঘোষান করা হয়েছে এবং দ্বিতীয় লাইনে সেই ভেরিয়েবলে 17 ডেটাটি রাখা হয়েছেঃ</p>
                  <p class="">int age;<br>age = 17;</p>
                  <p class="">আবার ভগ্নাংশ ডাটা নিয়ে কাজ করতে চাইলে float অথবা double ডাটাটাইপ ব্যবহার করতে হবে। যেমনঃ</p>
                  <p class="">float var_float; <br> var_float = 22.564;</p>
                  <p class="">আর ক্যারেক্টার টাইপ ডাটা নিয়ে কাজ করলে char ডাটাটাইপ ব্যবহার করতে হবে। ক্যারেক্টার ভেরিয়েবল সংরক্ষণ করতে হলে একক কোটেশন (') ব্যবহার করতে হবে। যেমনঃ নিচের উদাহরণে ch একটি character টাইপ ভেরিয়েবল, যেখানে A ক্যারেক্টারে ডেটাটি রাখা হয়েছে।</p>
                  <p class="">char ch; <br> ch = 'A';</p>
                  <p class="">ভেরিয়েবল ঘোষনা করার সময় একই সাথে ডেটাও রাখা যায়। যেমনঃ</p>
                  <p class="">char age = 17;</p>
                  <p class=""><b>নোট : সি ভাষায় প্রতিটি statement এর পর একটি সেমি-কোলন (;) দিতে হয়। Statement বলতে কোনো কাজ করা বুঝায়। যেমনঃ উপরের ভেরিয়েবল ঘোষনা করা এবং ভেরিয়েবলে মান রাখা প্রতিটিই এক একটি statement, তাই প্রতিটির শেষে একটি করে সেমি-কোলন দেয়া হয়েছে।</b></p>
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