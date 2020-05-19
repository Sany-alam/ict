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
            <a href="#">৫.৮ - অ্যারে</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">Array কি? কিভাবে?</p>
                  <p>ছোট কাজ করার সময় কম সংখ্যা ভেরিয়েবল ঘোষনা করে কাজ করা হয়। কিন্তু এরকম হতে পারে যে আমাদের ১০০টি ভেরিয়েবল প্রয়োজন। তখন আমাদের প্রতিটি ভেরিয়েবলের আলাদা আলাদা নাম দিয়ে ঘোষনা করতে হবে। যা অবশ্যই সময়সাপেক্ষ। এ সমস্যাটি সমাধানের জন্য সি প্রোগ্রামিং এ অ্যারে ব্যবহার করা হয়।</p>
                  <p>অ্যারে হল একই ডেটাটাইপের অনেকগুলো ভেরিয়েবলের সমষ্টি। অ্যারে তৈরির সময় ঠিক করে দিতে হয় অ্যারেটি কত আকারের হবে, অর্থাৎ মোট কত গুলো ভেরিয়েবল যুক্ত অ্যারে আমাদের প্রয়োজন।</p>
                </div>
                <div class="topic-parts-imp">
                  <p>অ্যারে ঘোষনার নিয়মঃ</p>
                  <p style="font-size:18px;">data_type array_name[array_size];</p>
                </div>
                <div class="topic-parts">
                  <p><b>উদাহরণঃ</b><br><b>int data[100];</b> এখানে data নামে একটি অ্যারে তৈরি হবে, যাতে 100 টি ডেটা রাখা যাবে।</p>
                  <p>অ্যারেতে ডেটা দুই ভাবে রাখা যায়ঃ</p>
                </div>

                <div class="topic-parts-code">
                  <h2>// ধরন ১ </h2>
                  <h1>int data[5] = {10, 20, 30, 40, 50};</h1>
                  <br>
                  <h2>// ধরন ২ </h2>
                  <h1>int data[5];
                    <br>
                    <br>data[0] = 10;<br>data[1] = 20;<br>data[2] = 30;<br>data[3] = 40;<br>data[4] = 50;</h1>
                  </div>
                  
                  <div class="topic-parts">
                    <p><b> ধরন ১</b></p><hr>
                    <p>এখানে সরাসরি অ্যারে ঘোষনার সময়ই কৌনিক ব্রাকেটের মাধ্যমে ডেটা অ্যারেতে রাখা যায়। </p>
                    <p><b>ধরন ২</b></p><hr>
                    <p>এখানে প্রথমে অ্যারেটি ঘোষনা করা হয়। তারপর প্রতিটি অ্যারের এলিমেন্টে আলাদা করে মান দেয়া হয়। অ্যারের এলিমেন্ট গুলো 0 থেকে গণনা করা হয়।<br>উপরের ৭ নং লাইনে data[0] হচ্ছে data অ্যারের প্রথম এলিমেন্ট। এভাবে data[1], data[2], data[3], data[4], data[5] হচ্ছে বাকী ভেরিয়েবল। এখানে "[]" ব্রাকেটের ভিতরের সংখ্যাটিকে বলে index।</p>
                    <p>নিচে অ্যারে দিয়ে একটি প্রোগ্রাম দেয়া হলঃ</p>
                  </div>                 
                    
                  <div class="topic-parts-code"> 
                    <h1>int data[100], i; 
                      <br><br>
                    for(i = 0 ; i <= 9 ; i++) <br>
                    { <br>
                      &nbsp;&nbsp;&nbsp;data[i] = 99; <br>
                    } <br>
                     <br>
                    for(i = 0 ; i <= 9 ; i++) <br>
                    { <br>
                      &nbsp;&nbsp;&nbsp;printf("%d " data[i]); <br>
                    } </h1>
                  </div>

                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    99 99 99 99 99 99 99 99 99 99 
                    </p>
                 </div>
                 
                 <div class="topic-parts">
                   <p> উপরের প্রোগ্রাম এ একটি 100 সাইজ এর data নামের অ্যারে নেওয়া হয়েছে, এরপর লুপ এর মাধ্যমে এর প্রথম ১০ টি ঘরে 99 রাখা হয়েছে।<br>আগেই বলা হয়েছে অ্যারের ইন্ডেক্স শুরু হয় 0 থেকে। তাই i = 0 থেকে লুপ শুরু হয়ে i < = 9 পর্যন্ত চালিয়ে 10 টি ঘরে 99 রাখা হয়েছে।</p>
                   <p>নিচে অ্যারেটিতে মান গুলো কিভাবে থাকে তা দেখানো হলঃ</p>
                   <p><b>int data [ 100 ];</b></p>
                   <table class="col-md-12 col-sm-12 responsive">
                  <tr>
                  <th>Index No.</th>
                  <th>0</th>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>. . .</th>
                  </tr>
                  <tr>
                  <th>Value</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>99</th>
                  <th>. . .</th>
                  </tr>
                  </table>
                 </div>


              <div class="topic-arrow-buttons">
                  <div class="topic-back">
                    <button>
                        <i class="fa fa-arrow-left"></i>
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