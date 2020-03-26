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
            <a href="#">5.7.1 Topic - for লুপ!</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="">প্রতিটি লুপ এ ৩ টা অংশ থাকেঃ initialize, condition এবং increment/decrement।</p>
                  <p class=""># initialize হল যে কাজ টা করব সেটা কোন জায়গা থেকে শুরু হবে তা নির্ধারণ করা। কোনো কাজ করতে যে ভেরিয়েবল গুলো প্রয়োজন সেগুলোর প্রাথমিক/শুরুর মান এ অংশে দেয়া হয়।</p>
                  <p class=""># condition হল কাজ টি কতটুকু করব বা কোথায় গিয়ে কাজ টি করা বন্ধ করে দিব তা নির্ধারণ করে। অর্থাৎ শর্ত দেয়া থাকে এ অংশে।</p>
                  <p class=""># increment/decrement এ অংশে initialize এ দেয়া ভেরিয়েবল গুলার মান বাড়ানো/কমানো হয়। এ জন্য increment/decrement অপারেটর সমূহ ব্যবহার করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">for লুপ কি? কিভাবে?</p>
                  <p class="">আগেই বলা হয়েছে লুপ এর কাজ হলো একি কাজ বারবার করা। এই একি কাজ বারবার করার একটি নিয়ম হলো for লুপ।</p>
                  <p class=""><b>for লুপ লিখার নিয়মঃ</b><br>for( initialize ; condition ; increment/decrement ) <br>
                    { <br>
                        // statements <br>
                    }</p>
                  <p class=""><b>উদাহরণঃ</b> <br>
                    int i, sum = 0;  <br>
                    for(i = 1 ; i <= 10 ; i++)  <br>
                    {  <br>
                        sum = sum + i;  <br>
                    } <br>
                    printf("Summation of 1 to 10: %d", sum);
                    </p>
                  <p class=""><b>ফলাফলঃ</b> Summation of 1 to 10: 55</p>
                  <p class="">উদাহরণ প্রোগ্রাম টিতে ১ থেকে ১০ পর্যন্ত সংখ্যা গুলোর যোগফল for লুপ এর মাধ্যমে বের করা হয়েছে। এখানে initialize হল "i = 1" যা 1 থেকে শুরু করা হয়েছে নির্দেশ করে।</p>
                  <p class="">এরপর condition চেক করে দেখবে। condition হল "i < = 10"। যদি condition অনুযায়ী সত্য হয় তাহলে কৌনিক ব্র্যকেটের ভিতরের কাজ করবে।</p>
                  <p class="">এরপর যাবে increment/decrement অংশে যাবে। এখানে increment করা হয়েছে "i++"। "++" এর ব্যবহার "অপারেটর" অংশে দেখানো হয়েছে। increment অংশে i++ অর্থাৎ i এর মান ১ বাড়িয়ে আবার condition চেক করবে। এখন i এর মান 2 নিয়ে condition চেক করবে। i <= 10 সত্য হলে আবার ব্রাকেট এর ভিতরের কাজ করবে। এরপর আবার increment/decrement অংশে যাবে। এভাবে condition মিথ্যা না হওয়া পর্যন্ত চলতে থাকবে। condition মিথ্যা হলে কাজ শেষ হয়ে যাবে। উপরের উদাহরণ এর ক্ষেত্রে i এর মান 10 হলে i <= 10 মিথ্যা হবে এবং লুপ এর কাজ শেষ হবে।</p>
                  <p class="">সুতরাং দেখা যাচ্ছে initialize অংশে শুধু একবার এই যাবে।</p>
                  <p class=""> <b>নোটঃ</b> for লুপ এর ভিতর মোট ২টি সেমিকোলন (";") গুলো দেওয়ার কথা অবশ্যই মনে রাখতে হবে!</p>
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