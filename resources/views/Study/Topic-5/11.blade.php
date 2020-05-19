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
            <a href="#">৫.৬.৩ - else...if স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">

          <div class="topic-parts-imp">
                  <p class="question text-light-primary">else...if কি? কেন?</p><hr>
                  <p class="">else...if ব্যবহার করা হয় যদি দুই এর অধিক শর্ত থাকে। প্রতি শর্ত এর জন্য যদি আলাদা কাজ করতে হয় তাহলে এই স্টেস্টমেন্ট ব্যবহার করা হয়। লেখার নিয়মঃ</p>
                  </div>
                  
                  <div class="topic-parts-code">
                  <h1>
                  if (condition 1)<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 1</h2>
                  <h1>}<br>
                  elseif(condition 2)<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 2</h2>
                  <h1>}<br>
                  elseif(condition 3)<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 3</h2>
                  <h1>}<br>
                  else<br>
                  {</h1>
                  <h2>&nbsp;&nbsp;&nbsp;// work 4</h2>
                  <h1>}</h1>
                  </div>

                  <div class="topic-parts">
                  <p class="">এখানে ৩ টা শর্ত এর উপর কাজ করা হয়েছে। condition 1 সত্য হলে work 1 করবে, condition 2 সত্য হলে work 2 করবে, condition 3 সত্য হলে work 3 করবে আর কোনো কন্ডিশবন সত্য না হলে work 4 করবে।</p>
                  <p class=""><b>উদাহরনঃ</b></p>
                  </div>
                  
                  <div class="topic-parts-code">
                  <h1>int a, b;<br>
                  a = 10;<br>
                  b = 20;<br><br>
                  if ( a > b )<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;prinf(" a is greater ") ;<br>
                  }<br>
                  elseif( b > a )<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;prinf(" b is greater ") ;<br>
                  }<br>
                  else<br>
                  {<br>
                  &nbsp;&nbsp;&nbsp;prinf(" a is equal to b ") ;<br>
                  }</h1>
                  </div>
                  
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    b is greater
                    </p>
                 </div>

                 <div class="topic-parts">
                  <p class="">১ থেকে ৩ নং লাইনে ২ টা variable a, b ঘোষনা করা হয়েছে এবং সেগুলোতে যথাক্রমে 10 এবং 20 রাখা হয়েছে। এরপর ২ টা শর্ত চেক করা হয়েছে, যদি a, b থেকে বড় হত তাহলে ৭নং লাইনের printf() কাজ করে ফেলত, কিন্তু a, b থেকে বড় না তাই পরের টা চেক করবে, এই ক্ষেত্রে b > a এই শর্ত সত্য তাই ১১নং লাইনের printf() কাজ করবে আর নিচে যাবে না।</p>
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