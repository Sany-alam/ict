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
            <a href="#">৫.৬.১ - if স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p class="question text-light-primary">if কি? এবং কেন!</p><hr>
                  <p class="">সি ভাষায় if স্টেটমেন্ট কে 'যদি' জাতীয় কাজ করতে ব্যবহার করা হয়। কোনো একটা কন্ডিশন বা শর্ত এর উপর ভিত্তি করে if কাজ করে। লেখার নিয়মঃ</p>
                  </div>
                  <div class="topic-parts-code">
                  <h1>
                  if (condition)<br>
                  { </h1>
                  <h2>&nbsp;&nbsp;&nbsp;// some works</h2>
                  <h1>}</h1>
                  <h2>// other works</h2> 
                  </div>

                  <div class="topic-parts">
                  <p class="">এখানে যেকোনো একটা কন্ডিশন যদি সত্য হয় তাহলে if স্টেটমেন্ট এর পর "some works" এ যাবে এবং এর পর "other works" এ যাবে, আর যদি কন্ডিশন মিথ্যা হয় তাহলে সরাসরি "other works" এ চলে যাবে।</p>
                  <p class=""><b>উদাহরনঃ</b></p>
                  </div>
                  <div class="topic-parts-code">
                  <h1>
                  int a = 10 ;<br>
                  if(a < 15)<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;printf(" less then 15 ");<br>
                  }<br>
                  printf("ok!");
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    less then 15
                    </p>
                 </div>

                 <div class="topic-parts">
                  <p class="">এখানে ১নং লাইনে ভ্যারিয়েবল a তে একটি সংখ্যা 10 রাখা আছে। এরপর ৩নং লাইনে if এ চেক করা হয়েছে a এর মান 15 থেকে কম নাকি। এই কন্ডিশন টি সত্য, কারন a এর মান 15 থেকে ছোট। তাই if স্টেটমেন্ট এর ভিতরে (৫নং লাইনের) printf() কাজ টি করবে এরপর এর নিচে বাইরের (৮নং লাইনের) printf() কাজ টি করবে। যদি a এর মান 15 থেকে বেশি হত তাহলে if স্টেটমেন্ট এর ভিতরে ডুকবে না, কারন কন্ডিশন মিথ্যা হবে। শুধু ব্র্যাকেট্ম এর বাইরের printf() এর কাজ করবে।</p>
                  </div>
                  
                  <div class="topic-parts-imp">
                  <p class="">if স্টেটমেন্ট কন্ডিশন সত্য হলে এর পর কৌনিক ব্র্যাকেট "{}" এর ভিতর সব কাজ করবে, এরপর পরের কাজে যাবে। আর মিথ্যা হলে কৌনিক ব্র্যাকেট এর ভিতরের কাজগুলো করবে না, সরাসরি পরের কাজে চলে যাবে।</p>
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