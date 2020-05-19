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
            <a href="#">৬. SQL</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts">
              <p class="question text-light-primary">SQL</p><hr>
              <ul>
                <li>SQL এর পুরো অর্থ Structured Query Language।</li>
                <li>SQL ডেটাবেজে প্রবেশ এবং এটি ব্যবহারের একটি শক্তিশালী হাতিয়ার।</li>
                <li>SQL হল ANSI (American National Standards Institute) standard।</li>
              </ul>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">SQL এর ব্যবহারঃ</p><hr>
              <ul>
                <li>ডেটা কুয়েরি করা।</li>
                <li>ডেটাবেজ থেকে ডেটা উত্তোলন করা।</li>
                <li>ডেটা সন্নিবেশ, মুছে ফেলা, সংশোধন করা।</li>
                <li>এছাড়াও নতুন ডেটাবেজ তৈরি, নতুন টেবিল তৈরির কাজেও ব্যবহার করা হয়।</li>
              </ul>
              <p>অর্থাৎ ডেটাবেজ সম্পর্কিত সকল ধরনের নিয়ন্ত্রনের কাজ করা হয় SQL দিয়ে।</p>
            </div>
            <div class="topic-parts-imp">
              <p>SQL দিয়ে করা প্রতিটি কাজকে এক-একটি statement বলে।</p>
              <p>মূলত বিভিন্ন ধরনের statement এর সাহায্যেই ডেটাবেজের কুয়েরিগুলো করা হয়ে থাকে। প্রতিটি statement এর পর একটি সেমিকোলন <b>( ; )</b> ব্যবহার করা হয়। সেমিকোলনটি একটি Statement থেকে অন্যটি পৃথক করতে সাহায্য করে।</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">গুরুত্বপূর্ণ SQL Statement:</p><hr>
              <ul>
                <li><b>CREATE -</b> ডেটাবেজ বা টেবিল তৈরি করা।</li>
                <li><b>INSERT -</b> নতুন ডেটা ডেটাবেজে যুক্ত করা।</li>
                <li><b>SELECT -</b> ডেটাবেজ থেকে ডেটা উত্তোলন/খোঁজ করা।</li>
                <li><b>UPDATE -</b> ডেটারেজের ডেটা হালনাগাদ (update) করা।</li>
                <li><b>DELETE -</b> ডেটাবেজ থেকে ডেটা মুছে ফেলা</li>
                <li><b>ALTER -</b> টেবল কলাম যুক্ত বা পরিবর্তন করা।</li>
                <li><b>DROP -</b> ইনডেক্স, টেবিল বা ডেটাবেজ মুছে ফেলা।</li>
              </ul>
            </div>

           

                <div class="topic-arrow-buttons">
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