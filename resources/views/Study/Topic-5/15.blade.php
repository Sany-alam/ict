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
            <a href="#">5.7.2 Topic - while লুপ!</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">while লুপ কি? কিভাবে?</p>
                  <p class="">while লুপ এর কাজ for লুপ এর মত। শুধু লেখার ধরণটি ভিন্ন। while লেখার নিয়মঃ <br> while(condition) <br>
                    { <br>
                        // statement <br>
                        // increment/decrement <br>
                    } <br> এখানে condition যতক্ষন সত্য থাকবে ততক্ষন কৌনিক ব্রাকেটের কাজ গুলো চলবে।</p>
                  <p class=""><b>উদাহরণঃ</b> <br> int i, sum = 0; <br>
                    i = 10; // initialize <br>
                    while(i >= 1) <br>
                    { <br>
                        sum = sum + i; // statement <br>
                        i--; // increment <br>
                    } <br> printf("Summation of 1 to 10: %d", sum); <br>
                    ফলাফলঃSummation of 1 to 10: 55</p>
                  <p class="">উদাহরণ এ প্রোগ্রামটিতে ১ থেকে ১০ সংখ্যা গুলোর যোগফল while লুপ এর মাধ্যমে বের করা হয়েছে। এবার উলটা দিক থেকে করা হয়েছে।</p>
                  <p class=""># এখানে initialize হল "i = 10" যা 10 থেকে শুরু করা হয়েছে নির্দেশ করে।</p>
                  <p class=""># এরপর condition চেক করে দেখবে। condition হল "i >= 1"। যদি condition অনুযায়ী সত্য হয় এরপর ব্র্যকেটের ভিতরের কাজ করবে। এরপর যাবে increment/decrement অংশে।</p>
                  <p class=""># এখানে decrement করা হয়েছে "i--"। "--" এর ব্যবহার "অপারেটর" অংশে দেখানো হয়েছে। decrement অংশে i-- অর্থাৎ i এর মান ১ কমিয়ে আবার condition চেক করবে। তখন এর মান i=9 নিয়ে condition চেক করবে। i>=1 সত্য হলে আবার ব্রাকেট এর ভিতরের কাজ করবে। এরপর আবার increment/decrement অংশে যাবে। এভাবে condition মিথ্যা না হওয়া পর্যন্ত চলতে থাকবে। condition মিথ্যা হলে কাজ শেষ হয়ে যাবে। উপরের উদাহরণ এর ক্ষেত্রে i এর মান ১ পর্যন্ত কাজ করবে এরপর i >= 1 মিথ্যা হবে এবং লুপ এর কাজ শেষ হবে।</p>
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