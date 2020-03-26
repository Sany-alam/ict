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
            <a href="#">5.7.3 Topic - do while লুপ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">do while লুপ কি? কিভাবে?</p>
                  <p class="">while এবং for লুপ এর মত do while ও একি কাজ করে। কিন্তু do while এর কাজের ধরন টা একটু ভিন্ন। do while লেখার নিয়মঃ <br> // initialize <br>
                    do <br>
                    { <br>
                        // statement <br>
                        // increment/decrement <br>
                    } while(condition); <br> অন্য লুপ গুলোর থেকে এর বিশেষত্য হল এ লুপের কৌনিক ব্রাকেটের ভিতরের কাজ গুলো কমপক্ষে একবার হবে, তারপর condition পরীক্ষা করবে। condition সত্য হলে লুপ চলতে থাকবে, না হয় বন্ধ হয়ে যাবে। অর্থাৎ condition সত্য হোক আর মিথ্যা হোক লুপ এর ভিতরের কাজ একবার চলবেই।</p>
                  <p class=""><b>উদাহরণঃ</b> <br> int i, sum = 0; <br>
                    i = 1; <br>
                    do <br>
                    { <br>
                        sum = sum + i; <br>
                        i++; <br>
                    } while(i <= 10); <br> printf("Summation of 1 to 10: %d", sum); <br>
                    <b>ফলাফলঃ</b> Summation of 1 to 10: 55 <br></p>
                  <p class=""># উদাহরণ এ intialize এ i=1 করার পর লুপ এর ব্র্যাকেট এর ভিতর ডুকে যোগ এর কাজ করে তারপর i++(increment) করবে। <br># এরপর while এর ভিতর i <= 10 (condition) চেক করবে। condition সত্য হলে আবার ব্র্যাকেট এর ভিতর ডুকবে। <br> # যেমন যখন i = 1 তখন sum এর সাথে 1 যোগ করবে, এরপর i++ এ 1 বাড়াবে এবং i <=10 সত্য হলে আবার i=2 হবে sum এর সাথে 2 যোগ করবে। এরপর আবার i++ এ 1 বাড়িয়ে i<=10 চেক করবে। <br># do while লুপ এ কৌনিক ব্রাকেটের কাজ প্রথমবার করার আগে condition চেক করে না কিন্তু while এবং for লুপে প্রথম স্টেপ থেকেই condition চেক করে। অর্থাৎ do while লুপ এর condition মিথ্যা হলেও এর ভিতরের কাজ একবার চলবে।</p>
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