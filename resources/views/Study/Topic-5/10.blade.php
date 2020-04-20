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
            <a href="#">৫.৬.২ - if...else স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
                  <p class="question text-light-primary">if...else কি? কেন?</p><hr>
                  <p class="">if...else এর ক্ষেত্রে কোনো একটা কন্ডিশন বা শর্ত সত্য হলে একটা কাজ করবে আবার মিথ্যা হলে আরেকটি কাজ করবে। লেখার নিয়মঃ</p>
                  </div>
                  <div class="topic-parts-code">
                  <h1>
                  if (condition)<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 1</h2>
                  <h1>}<br>
                  else<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 2</h2>
                  <h1>}</h1>
                  </div>

                  <div class="topic-parts">
                  <p class="">এখানে condition যদি সত্য হয় তাহলে work 1 করবে আর যদি condition মিথ্যা হয় তাহলে work 2 করবে।</p>
                  <p class=""><b>উদাহরনঃ</b></p>
                  </div>
                  <div class="topic-parts-code">
                  <h1>
                  int a = 10 ;<br>
                  if(a < 15)<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;printf(" less then 15 ");<br>
                  }<br>
                  else<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;printf(" not less then 15 ");<br>
                  }
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    less then 15
                    </p>
                 </div>

                 <div class="topic-parts">
                  <p class="">এখানে ১নং লাইনে ভ্যারিয়েবল a তে একটি সংখ্যা 10 রাখা আছে। এরপর ৩নং লাইনে if এ চেক করা হয়েছে a এর মান 15 থেকে কম নাকি। এই কন্ডিশন টি সত্য, কারন a এর মান 15 থেকে ছোট। তাই if স্টেটমেন্ট এর ভিতরের printf() কাজ টি করবে। আর যদি কন্ডিশন টি মিথ্যা হত অর্থাৎ x এর মান 15 থেকে বেশি হত তাহলে else এর পরের printf() কাজ করত।</p>
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