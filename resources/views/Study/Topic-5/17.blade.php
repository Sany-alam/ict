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
            <a href="#">5.8 Topic - অ্যারে</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">Array কি? কিভাবে?</p>
                  <p class="">ছোট কাজ করার সময় কম সংখ্যা ভেরিয়েবল ঘোষনা করে কাজ করা হয়। কিন্তু এরকম হতে পারে যে আমাদের ১০০টি ভেরিয়েবল প্রয়োজন। তখন আমাদের প্রতিটি ভেরিয়েবলের আলাদা আলাদা নাম দিয়ে ঘোষনা করতে হবে। যা অবশ্যই সময়সাপেক্ষ। এ সমস্যাটি সমাধানের জন্য সি প্রোগ্রামিং এ অ্যারে ব্যবহার করা হয়।</p>
                  <p class="">অ্যারে হল একই ডেটাটাইপের অনেকগুলো ভেরিয়েবলের সমষ্টি। অ্যারে তৈরির সময় ঠিক করে দিতে হয় অ্যারেটি কত আকারের হবে, অর্থাৎ মোট কত গুলো ভেরিয়েবল যুক্ত অ্যারে আমাদের প্রয়োজন।</p>
                  <p class=""><b>অ্যারে ঘোষনার নিয়মঃ</b> data_type array_name[array_size];</p>
                  <p class=""><b>উদাহরণঃ</b> int data[100]; এখানে data নামে একটি অ্যারে তৈরি হবে, যাতে 100 টি ডেটা রাখা যাবে।</p>
                  <p class=""><b>অ্যারেতে ডেটা দুই ভাবে রাখা যায়ঃ</b> <br>
                    // ধরন ১ <br>
                  </p>
                  <ol>
                    <li>int data[5] = {10, 20, 30, 40, 50};</li>
                  </ol>
                     <br>
                  <p class="">
                    // ধরন ২ <br>
                  </p>
                  <ol>
                    <li>int data[5];</li>
                    <li></li>
                    <li>data[0] = 10;</li>
                    <li>data[1] = 20;</li>
                    <li>data[2] = 30;</li>
                    <li>data[3] = 40;</li>
                    <li>data[4] = 50;</li>
                  </ol>
                  <p class="">
                    ধরন ১ <br>
                    এখানে সরাসরি অ্যারে ঘোষনার সময়ই কৌনিক ব্রাকেটের মাধ্যমে ডেটা অ্যারেতে রাখা যায়। <br>
                     <br>
                    ধরন ২ <br>
                    এখানে প্রথমে অ্যারেটি ঘোষনা করা হয়। তারপর প্রতিটি অ্যারের এলিমেন্টে আলাদা করে মান দেয়া হয়। অ্যারের এলিমেন্ট গুলো 0 থেকে গণনা করা হয়।</p>
                  <p class="">উপরের ৭ নং লাইনে data[0] হচ্ছে data অ্যারের প্রথম এলিমেন্ট। এভাবে data[1], data[2], data[3], data[4], data[5] হচ্ছে বাকী ভেরিয়েবল। এখানে "[]" ব্রাকেটের ভিতরের সংখ্যাটিকে বলে index।</p>
                  <p class="">নিচে অ্যারে দিয়ে একটি প্রোগ্রাম দেয়া হলঃ <br><br>
                    int data[100], i; <br>
                     <br>
                    for(i = 0 ; i <= 9 ; i++) <br>
                    { <br>
                        data[i] = 99; <br>
                    } <br>
                     <br>
                    for(i = 0 ; i <= 9 ; i++) <br>
                    { <br>
                        printf("%d " data[i]); <br>
                    } <br>
                    99 99 99 99 99 99 99 99 99 99  <br>
                    উপরের প্রোগ্রাম এ একটি 100 সাইজ এর data নামের অ্যারে নেওয়া হয়েছে, এরপর লুপ এর মাধ্যমে এর প্রথম ১০ টি ঘরে 99 রাখা হয়েছে।</p>
                  <p class="">আগেই বলা হয়েছে অ্যারের ইন্ডেক্স শুরু হয় 0 থেকে। তাই i = 0 থেকে লুপ শুরু হয়ে i < = 9 পর্যন্ত চালিয়ে 10 টি ঘরে 99 রাখা হয়েছে।</p>
                  <p class="">নিচে অ্যারেটিতে মান গুলো কিভাবে থাকে তা দেখানো হলঃ</p>
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