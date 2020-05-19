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
            <a href="#">৬.২ INSERT স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
            <div class="topic-parts">
              <p class="question text-light-primary">INSERT স্টেটমেন্ট</p><hr>
              <p>SQL দিয়ে তৈরি টেবিলে ডেটা যুক্ত করতে INSERT statement ব্যবহার করা হয়।</p>
              <p>SQL এ নতুন রেকর্ড বা ডেটা ঢুকানোর জন্য INSERT INTO কমান্ডটি ব্যবহার করা হয়। এটি দুই ভাবে লিখা যায়ঃ</p>
            </div>
            <div class="topic-parts-imp">
              <p>Column বলে দেয়া ছাড়াঃ</p><hr>
              <p style="color : #607d8b!important;"><b>INSERT INTO</b> table_name<br><b>VALUES</b> (value1, value2, value3, ...);</p>
              <p>Column এর নাম সহঃ</p><hr>
              <p style="color : #607d8b!important;"><b>INSERT INTO</b> table_name (column1, column2, column3, ...)<br><b>VALUES</b> (value1, value2, value3, ...);</p>
              </div>
              <div class="topic-parts">
              <p><b>প্রথমটি</b> দ্বারা কলামের নাম উল্লেখ না করেই ভ্যালু ঢুকানো যায়, দ্বিতীয়টিতে ভ্যালুর সাথে সাথে কলামের নামও উল্লেখ করতে হয়। তবে প্রথমটিতে ভ্যালুর সংখ্যা অবশ্যই কলাম সংখ্যার সমান হতে হবে। অর্থাৎ যতটি কলাম ততটি ভ্যালু থাকতে হবে, ভ্যালু সংখ্যা কলামের কম বা বেশি হলে Error দেখাবে।</p>
              <p><b>দ্বিতীয়টিতে</b> এই ভুল হবার সম্ভাবনা নেই কেননা কলামের নাম উল্লেখ থাকছে যাতে আমরা বুঝতে পারি কোন কলামে কোন ভ্যালু ঢুকাচ্ছি, তবে উভয়ক্ষেত্রেই যদি ডাটা টাইপ না মিলে অর্থাৎ যদি Tution_Fees এর জায়গায় কোন ক্যারেক্টার ঢুকাতে চাই তাহলে Error দেখাবে, কেননা Tution_Fees এর ডেটা টাইপ নির্ধারণ করে দেওয়া হয়েছে number টাইপ।</p>
              <p>এছাড়াও আমরা যদি শুধুমাত্র কোন নির্দিষ্ট কলামে কোন ভ্যালু ঢুকাতে চাই তাহলে দ্বিতীয় পদ্ধতি দ্বারাই সম্ভব। অর্থাৎ কলামের নাম এবং ভ্যালু উল্লেখ করে দিলেই হবে।</p>
            </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/1.png" alt="">
            </div>
            <div class="topic-parts">
              <p>এবার আমরা INSERT INTO ব্যবহার করে টেবিলটিতে ভ্যালু যুক্ত করতে পারি।</p><hr>
              <p style="color : #607d8b!important;">
              <b>INSERT INTO</b> Students_Information<br>
              <b>VALUES</b> (<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01,<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Asaduzzaman',<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Golam Sarwar',<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Sufia Begum',<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Kushtia',<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'Science',<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10000<br>);</p>
              <p>দ্রষ্টব্যঃ লেখা (text) ধরনের ডেটা গুলো single quote চিহ্ন ('') দিয়ে লিখতে হবে।</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির প্রথম row দেখতে নিচের মত হবেঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/2.png" alt="">
            </div>
            <div class="topic-parts">
              <p>একইভাবে আমরা আরো কিছু ডেটা ঢুকিয়ে ফেলতে পারি টেবিলটিতে...</p><hr>
              <p style="color : #607d8b!important;">
              <b>INSERT INTO</b> Students_Information<br>              
              <b>VALUES</b> ( 02, 'Shahriar Apu', 'Hamid Khan', 'Rashida Akhter', 'Barisal', 'Arts', 12000);<br>
              <b>INSERT INTO</b> Students_Information<br>              
              <b>VALUES</b> ( 03, 'Didarul Dipu', 'Bazlu Khan', 'Hena Akhter', 'Barisal', 'Arts', 12000);<br>
              <b>INSERT INTO</b> Students_Information<br>              
              <b>VALUES</b> ( 04, 'Adnan Jami', 'Asaduzzaman', 'Taslima', 'Kushtia', 'Business', 11000);<br>
              <b>INSERT INTO</b> Students_Information<br>              
              <b>VALUES</b> ( 05, 'Ariful Islam', 'Abul Kalam', 'Alea Khatun', 'Rajshahi', 'Science', 12000);</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির প্রথম row দেখতে নিচের মত হবেঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
              <p>এখানে উল্লেখযোগ্য যে আমরা টেবিলটিতে ডেটা ইনসার্ট করেছি শুধু, টেবিলটি আমাদের কাছে দৃশ্যমান নয়। টেবিলটি আমরা দেখতে পারি <b>SELECT</b> এর সাহায্যে। এটি সম্পর্কে পরবর্তীতে আলোচনা করা হয়েছে।</p>
              
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