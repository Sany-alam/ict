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
            <a href="#">৬.৪ WHERE কী-ওয়ার্ড</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">WHERE কী-ওয়ার্ড</p><hr>
              <p>ডেটাবেজ থেকে নির্দিষ্ট শর্তসাপেক্ষে কোন ডেটা বা রেকর্ড দেখতে <b>WHERE</b> কী-ওয়ার্ড টি ব্যবহার করা হয়।</p>
              </div>
            <div class="topic-parts-imp">
              <p>এটি লিখা হয় নিচের মত করেঃ</p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> column_name1, column_name2<br><b>FROM</b> table_name;<br><b>WHERE</b> column_name operator value;</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরন ১</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি যাদের District Barisal শুধুমাত্র তাদের রেকর্ড বা ডেটা সিলেক্ট করবে।</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information;<br><b>WHERE</b> District = '<b>Barisal</b>';</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে আমাদের output আসবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/5.png" alt="">
              <br><br><p>যেহেতু আমরা কমান্ড লিখার সময় <b>"*"</b> ব্যবহার করেছি তাই উপরের কমান্ডটি যাদের বাড়ি বরিশালে তাদের সম্পর্কে সব কলাম ই দেখিয়েছে।</p>
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরন ২</p><hr>
              <p>আমরা সিলেক্ট করার সময় সব কলাম না সিলেক্ট করে নির্দিষ্ট সংখ্যাক কলামও সিলেক্ট করতে পারি। যেমনঃ আমরা যদি যাদের বাড়ি বরিশাল তাদের সব তথ্য দেখার বদলে শুধুমাত্র তাদের নাম দেখতে চাই তাহলে কমান্ড নিচের মত লিখতে হবেঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> Name<br><b>FROM</b> Students_Information;<br><b>WHERE</b> District = '<b>Barisal</b>';</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে আমাদের output আসবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap6/6.png" alt="">
            </div> 
            <div class="topic-parts">
            <p>আমরা যদি text ব্যবহার করি তাহলে তাকে Single Quotation চিহ্নযুক্ত <b>( ' ... ' )</b> করে দিতে হবে। আবার যদি সংখ্যা বা numeric ব্যবহার করি তাহলে কোটেশন চিহ্ন দেয়ার দরকার নেই।</p>
              <p>যেমনঃ <br><b>text ডেটাটাইপঃ</b></p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information;<br><b>WHERE</b> District = '<b>Barisal</b>';</p>
              <p><b>number ডেটাটাইপঃ</b></p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information;<br><b>WHERE</b> ID = <b>1</b>;</p>
              </div>
              <div class="topic-parts">
              <p class="question text-light-primary">Operator</p><hr>
              <p>WHERE এ শর্ত ঠিক করে দিতে "=" (equal) সহ যে সব চিহ্ন ব্যবহার করা হয় সেগুলোকেই অপারেটর বলা হয়।</p>
              <p>নিচে কিছু উল্লেখযোগ্য অপারেটরের নাম এবং বর্ণনা দেওয়া হল।</p>
              <table class="col-md-6 col-sm-12 responsive">
              <tr>
              <th>OPERATOR</th>
              <th>DESCRIPTION</th>
              </tr>
              <tr>
              <td>=</td>
              <td>সমান</td>
              </tr>
              <tr>
              <td><></td>
              <td>সমান নয়। এটিকে != দিয়েও লিখা যায়।</td>
              </tr>
              <tr>
              <td>></td>
              <td>বড় (greater then)</td>
              </tr>
              <tr>
              <td><</td>
              <td>ছোট (less then)</td>
              </tr>
              <tr>
              <td>>=</td>
              <td>বড় অথবা সমান</td>
              </tr>
              <tr>
              <td><=</td>
              <td>ছোট অথবা সমান</td>
              </tr>
              <tr>
              <td>BETWEEN</td>
              <td>দুটি রেঞ্জের ভিতর ডেটা খোঁজা</td>
              </tr>
              <tr>
              <td>LIKE</td>
              <td>কোন প্যাটার্ন খোঁজা</td>
              </tr>
              </table>
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