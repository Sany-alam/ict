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
            <a href="#">5.6.4 Topic - switch স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">switch কি? কেন?</p>
                  <p class="">switch আর else...if মোটামুটি একই কাজ করে, তবে else...if থেকে switch দেখতে সাজানোগুছানো লাগে। আর সংখ্যা তুলনা সম্পর্কিত কাজ করতে switch ই ব্যবহার করা হয়। switch এ শর্ত গুলা কিভাবে আসতে পারে সেভাবে case হিসেবে ভাগ করে কাজ করা হয়। লেখার নিয়মঃ</p>
                  <p class="">switch (val) <br>
                    { <br>
                        case 1: <br>
                            printf("val = 1"); <br>
                            break; <br>
                        case 2: <br>
                            printf("val = 2"); <br>
                            break; <br>
                        default: <br>
                            printf("val default"); <br>
                    }</p>
                  <p class="">এখানে val এর মান 1 হলে case 1 এ ঢুকে "val = 1" প্রিন্ট করবে আবার মান 2 হলে case 2 এ ঢুকে "val = 2" প্রিন্ট করবে। আর এই দুটির এক্টাও নাহলে default এ ঢুকে "val default" প্রিন্ট করবে। এখানে case হিসেবে switch এর ব্র্যাকেট এর ভিতর রাখা ভ্যারিয়েবল এর সাথে সম্পর্কিত যেকোনো মান ব্যবহার করা যাবে।</p>
                  <p class=""><b>উদাহরনঃ</b></p>
                  <ol>
                    <li>switch(a)</li>
                    <li>{</li>
                    <li>case 1:</li>
                    <li>printf("a = 1");</li>
                    <li>break;</li>
                    <li>case 2:</li>
                    <li>printf("a = 2");</li>
                    <li>break;</li>
                    <li>default:</li>
                    <li>printf("a is not 1 or 2");</li>
                    <li>}</li>
                  </ol>
                  <p class=""><b>ফলাফলঃ</b> a = 1</p>
                  <p class="">এখানে ১ নাম্বার লাইনে ভ্যারিয়েবল a তে একটি সংখ্যা 1 রাখা আছে। ৩ নাম্বার লাইন এ switch(a) তে a এর মান চেক করা হয়েছে। a এর মান 1 হওয়াতে ৫ নাম্বার লাইনে case 1 এর সাথে মিলে যায়। তাই সে case 1 এর অন্তর্ভুক্ত ৬ নাম্বার লাইনের "a = 1" প্রিন্ট করে ৭ নাম্বার লাইনের break করে বের হয়ে যাবে। এখন যদি a এর মান 2 হত তাহলে ৮ নাম্বার লাইনের case 2 সত্য হত এবং ৯ নাম্বার লাইনের "a = 2" প্রিন্ট করে ১০ নাম্বার লাইনের break করে কাজ শেষ করত। আর যদি দুটির এক্টিও না হয় তাহলে ১১ নাম্বার লাইনের default সত্য হত আর ১২ নাম্বার এর "a is not 1 or 2" প্রিন্ট করত। এটি শেষ অংশ। তাই এখানে আর এর প্রয়োজন হয় না। এভাবে আরো কয়েকটা যুক্ত করে নিজেরা চেষ্টা করতে পারো!</p>
                  <p class=""><b>নোটঃ</b> switch এর ক্ষেত্রে শেষের default case ছাড়া প্রতি case এর পর break দিতে হবে যাতে কাজ করার পর বের হয়ে আসতে পারে। break না দিয়ে উপরে প্রোগ্রাম রান করে দেখতে পারো। কি হয় দেখো!</p>
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