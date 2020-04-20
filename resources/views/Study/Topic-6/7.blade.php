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
            <a href="#">৬.৬ ORDER BY কী-ওয়ার্ড</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
              <p class="question text-light-primary">ORDER BY কী-ওয়ার্ড</p><hr>
              <p>ডেটাবেজের টেবিলের কলামগুলো সর্ট বা সাজাতে <b>ORDER BY</b> keyword-টি ব্যবহার করা হয়।</p>
              <p>সাধারণত <b>ORDER BY</b> keyword-টি কলামের ভ্যালুগুলোকে Ascending অর্থাৎ উপর থেকে নিচে ক্রমানুযায়ী সাজায়। তবে <b>ASC</b> keyword-টি ব্যবহার করেও উপর থেকে নিচে ক্রমানু্যায়ী সাজানো যায়। আর যদি ভ্যালুগুলো Descending অর্থাৎ নিচের থেকে উপরে ক্রমানুযায়ী সাজাতে চাই তাহলে <b>DESC</b> keyword-টি ব্যবহার করতে হবে।</p>
              </div>
            <div class="topic-parts-imp">
              <p>ORDER BY লিখার সাধারণ নিয়মঃ</p><hr>
              <p style="color : #607d8b!important;"><b>SELECT</b> column_name, column_name<br><b>FROM</b> table_name;<br><b>ORDER BY</b> column_name1 <b>ASC|DESC</b>, column_name2 <b>ASC|DESC</b>;</p>
              </div>
            <div class="topic-parts">
              <p>উদাহরণ টেবিলঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/3.png" alt="">
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহরণ ১</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি Students_Information টেবিল থেকে সবগুলো কলাম সিলেক্ট করবে এবং তাদেরকে Name এর ভিত্তিতে উপর থেকে নিচ ক্রমানুযায়ী সাজাবে।</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information<br><b>ORDER BY</b> Name;</p>
              <p>উপরের উদাহরণটি নিচের মত করেও লিখা যায়, যা একই ফলাফল দিবেঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information<br><b>ORDER BY</b> Name <b>ASC</b>;</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/9.png" alt="">
              <br><br><p>তাহলে আমরা দেখতে পাচ্ছি টেবিলের ডেটাগুলো Name এর ভিত্তিতে Ascending Order-এ সেজেছে।</p>
            </div>
            <div class="topic-parts">
            <p class="question text-light-primary">উদাহারণ ২</p><hr>
              <p>নিচের SQL স্টেটমেন্টটি Students_Information টেবিল থেকে সবগুলো কলাম সিলেক্ট করবে এবং তাদেরকে Name এর ভিত্তিতে নিচ থেকে উপরে ক্রমানুযায়ী সাজাবেঃ</p>
              <p style="color : #607d8b!important;"><b>SELECT</b> *<br><b>FROM</b> Students_Information<br><b>ORDER BY</b> Name <b>DESC</b>;</p>
            </div>
            <div class="topic-parts">
              <p>তাহলে টেবিলটির সম্পূর্ণ অবস্থা হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap6/10.png" alt="">
              <br><br><p>তাহলে আমরা দেখতে পাচ্ছি টেবিলের ডেটাগুলো Name এর ভিত্তিতে Descending Order-এ সেজেছে।</p>
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