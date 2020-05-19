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
            <a href="#">৪.১০ হাইপারলিঙ্ক তৈরি করা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts-imp">
              <p class="question text-light-primary">হাইপারলিঙ্ক</p><hr>
              <p>ইন্টারনেট চালু করে নিচের গুগল লিখাটিতে ক্লিক করলে তুমি গুগল এর হোম পেজ দেখতে পাবে।</p>
              <a href="https://www.google.com.bd">গুগল</a>
              <p>একেই লিঙ্ক বা হাইপারলিঙ্ক (hyperlink) বলা হয়।</p>
              <p>আমাদের কোন পেজ থেকে অন্য পেজ এ যাওয়ার জন্যে লিঙ্ক তৈরী করতে হয়।</p>
              <p>এইচটিএমএল এ লিংক ব্যবহার করার জন্য অ্যাঙ্কর (Anchor) ট্যাগ &lt;a&gt; ... &lt;/a&gt; ব্যবহার করা হয় এবং এর সাথে href অ্যাট্রিবিউট ব্যবহার করা হয়।</p>
            <p>এইচটিএমএল লিংক এর গঠন হচ্ছেঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;a href="তোমার লিঙ্ক"&gt; এখানে লিখা লিখুন  &lt;/a&gt;
                </h1>
            </div>
            <div class="topic-parts-code-ans">
                <p>নিচে একটি উদাহরণ দেওয়া হলঃ</p>
                <a href="https://www.google.com.bd">Go To Google</a>
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