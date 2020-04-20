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
            <a href="#">৬.১ CREATE স্টেটমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">CREATE স্টেটমেন্ট</p><hr>
              <p>ডেটাবেজে নতুন টেবিল তৈরির জন্য <b>CREATE TABLE</b> স্টেটমেন্টটি ব্যবহার করা হয়।</p>
              <p>টেবিল হচ্ছে কতগুলো Row এবং Column এর সমষ্টি। প্রতিটি টেবিলেরই একটি নাম থাকতে হবে। যেমনঃ</p>
            </div>
            <div class="topic-parts">
              <p style="color : #607d8b!important;"><b>CREATE TABLE</b> table_name<br>
              (<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column_name1 data_type(size),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column_name2 data_type(size),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;column_name3 data_type(size),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...<br>
              );</p>
            </div>
            <div class="topic-parts">
               <ul>
                <li><b>table_name </b> প্যারামিটারটি হচ্ছে টেবিলের নাম।</li>
                <li><b>column_name </b>প্যারামিটারটি হচ্ছে টেবিলের কলামগুলোর নাম। column_name1 হচ্ছে প্রথম কলামের নাম, column_name2 হচ্ছে দ্বিতীয় কলামের নাম ইত্যাদি।</li>
                <li><b>data_type </b> প্যারামিটারটি হচ্ছে কলামগুলোতে কি টাইপের ডেটা থাকবে। ডেটা টাইপ বিভিন্ন রকমের হতে পারে। যেমনঃ varchar, integer, decimal, date, etc.</li>
                <li><b>size</b> প্যারামিটার নির্দেশ করে প্রতিটি কলামের সর্বোচ্চ ধারণক্ষমতা। এটি Optional, অর্থাৎ এটি না দিলেও SQL কাজ করবে।</li>
              </ul>
            </div>
            <div class="topic-parts-imp">
              <p>একটি বিষয় উল্লেখযোগ্য যে SQL এর কমান্ডগুলো Case Sensitive নয়। অর্থাৎ CREATE TABLE/ create table/ Create TABLE/ CREATE table সবগুলোই একই অর্থ প্রকাশ করে।</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">Data Types</p><hr>
              <p>বিভিন্ন ডেটাবেজ সফটওয়্যার বিভিন্ন ডেটাটাইপ নাম ব্যবহার করে। নাম আলাদা হলেও সব ডেটাবেজ সফটওয়্যারের ডেটাটাইপ গুলো একই রকম।</p>
              <p>নিচে Microsoft Access এ ব্যবহৃত ডেটা টাইপ গুলো দেওয়া হলঃ</p>
              <table class="responsive">
                <tr>
                  <th>ডেটা ধরনের নাম</th>
                  <th>বণর্না</th>
                </tr>
                <tr>
                  <td>Text</td>
                  <td>যে কোনো লেখা। সর্বোচ্চ 255 টা অক্ষর হতে পারবে।</td>
                </tr>
                <tr>
                  <td>Memo</td>
                  <td>বড় লেখার ক্ষেত্রে ব্যবহার করা হয়। সর্বোচ্চ 65,536 টা অক্ষর হতে পারবে।</td>
                </tr>
                <tr>
                  <td>Byte</td>
                  <td>0 থেকে 255 পযর্ন্ত সংখ্যা রাখতে পারবে।</td>
                </tr>
                <tr>
                  <td>Integer</td>
                  <td>-32,768 থেকে 32,767 এর মধ্যে যে কোনো পূর্ণ সংখ্যা রাখতে পারবে।</td>
                </tr>
                <tr>
                  <td>Long</td>
                  <td>-2,147,483,648 থেকে 2,147,483,647 এর মধ্যে যে কোনো পূর্ণ সংখ্যা রাখতে পারবে।</td>
                </tr>
                <tr>
                  <td>Single</td>
                  <td>ভগ্নাংশ যুক্ত সংখ্যা রাখার জন্য। মেরোরির আকার 4 বাইট।</td>
                </tr>
                <tr>
                  <td>Double</td>
                  <td>ভগ্নাংশ যুক্ত সংখ্যা রাখার জন্য। মেরোরির আকার 8 বাইট।</td>
                </tr>
                <tr>
                  <td>Currency</td>
                  <td>মুদ্রা/টাকার সংখ্যা রাখতে পারে।</td>
                </tr>
                <tr>
                  <td>AutoNumber</td>
                  <td>স্বয়ংক্রিয় ক্রমিক নাম্বার যুক্ত কর। এটি 1 থেকে শুরু করে এবং ডেটা যত বাড়ে তত নিজে নিজে মান বাড়িয়ে ডেটাবেজে রাখে।</td>
                </tr>
                <tr>
                  <td>Date/Time</td>
                  <td>তারিখ এবং সময় রাখার জন্য ব্যবহার করা হয়।</td>
                </tr>
                <tr>
                  <td>Yes/No</td>
                  <td>শুধুমাত্র সত্য/মিথ্যা রাখা যায়।</td>
                </tr>
                <tr>
                  <td>Ole(Object Linking and Embedding)</td>
                  <td>Object ছবি, শব্দ, চলচিত্র ইত্যাদি তথ্য রাখা যায়।</td>
                </tr>
              </table>
            </div>
            <div class="topic-parts">
              <p>আমরা যদি Students_Information নামের একটি টেবিল তৈরি করতে চাই তাহলে নিম্নোক্তভাবেই করতে পারিঃ</p>
            </div>
            <div class="topic-parts">
              <p style="color : #607d8b!important;"><b>CREATE TABLE</b> Students_Information<br>
              (<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID NUMBER(10),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name TEXT(20),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fathers_Name TEXT(20),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mothers_Name TEXT(20),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District TEXT(15),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Section TEXT(10),<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tution_Fees NUMBER(10)<br>
              );</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে নিচের টেবিলটির মত একটি টেবিল তৈরি হবেঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/1.png" alt="">
              <br><br><p>আমাদের পরবর্তী অধ্যায় গুলোতে SQL এর উদাহরণে উপরের টেবিলটি ব্যবহার করা হবে।</p>
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