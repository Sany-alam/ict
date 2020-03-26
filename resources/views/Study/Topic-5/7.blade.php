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
            <a href="#">5.5 Topic - অপারেটর</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <!-- <p class="question text-light-primary">Question is here?</p> -->
                  <p class="">আমরা গানিতিক কাজে যে +, -, ×, ÷ ইত্যাদি ব্যবহার করি এগুলোকেই অপারেটর বলে।</p>
                  <p class="">সি ভাষায় কয়েকধরনের অপারেটর রয়েছে। সব ধরনের অপারেটর টেবিল আকারে নিচে দেওয়া আছেঃ</p>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">বীজগনিতিক (Arithmetic) অপারেটর
                    অপারেটর	ব্যবহার</p>
                  <p class="">
                    +
                    যোগ অপারেটর <br>
                    -
                    বিয়োগ অপারেটর <br>
                    *
                    গুন অপারেটর <br>
                    /
                    ভাগ অপারেটর <br>
                    %
                    ভাগশেষ অপারেটর, একে modulus অপারেটর বলে।
                    উদাহরনঃ (বীজগনিতিক (Arithmetic) অপারেটর)</p>
                    <ol>
                        <li>int a = 1,b=2,c=3,d=4;</li>
                        <li>printf("Initial value of a = 1, b = 2, c = 3, d = 4\n");</li>
                        <li>printf("value of a+b: %d\n", a + b);</li>
                        <li>printf("value of c+d+b: %d\n", c + d + b);</li>
                        <li>printf("value of d-a: %d\n", d - a);</li>
                        <li>Initial value of a = 1, b = 2, c = 3, d = 4 </li>
                        <li>value of a+b: 3 </li>
                        <li>value of c+d+b: 9</li>
                        <li>value of d-a: 3</li>
                    </ol>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">ইউনারি (unary) অপারেটর এবং অপারেটর	উদাহরণ	ব্যবহার</p>
                  <p class="">++<br>
                    i++;<br>
                    ++i;<br>
                    যে ভ্যারিয়েবল বা অপারেন্ড এর সাথে থাকবে তার মান এক বাড়াবে<br>
                    --<br>
                    i--;<br>
                    --i;<br>
                    যে ভ্যারিয়েবল বা অপারেন্ড এর সাথে থাকবে তার মান এক কমাবে<br>
                    <b>উদাহরনঃ (ইউনারি (unary) অপারেটর)</b></p>
                    <ol>
                        <li>int a = 1, b = 2, c = 3, d = 4;</li>
                        <li>printf("Initial value of a = 1, b = 2, c = 3, d = 4\n");</li>
                        <li>a++;</li>
                        <li>printf("now value of a: %d\n", a);</li>
                        <li>b--;</li>
                        <li>printf("now value of b: %d\n", b);</li>
                        <li>printf("++d: %d\n", ++d);</li>
                        <li>Initial value of a = 1, b = 2, c = 3, d = 4</li>
                        <li>now value of a: 2</li>
                        <li>now value of b: 1</li>
                        <li>c++: 3</li>
                        <li>++d: 5</li>
                    </ol>
                    <p class="">এখানে ১ নাম্বার লাইন এ ৪ টা ভ্যারিয়েবল এ কিছু মান নেওয়া হয়েছে। ৩ নাম্বার লাইন এ ইউনারি অপারেটর এর মাধ্যমে a++ করা হয়েছে অর্থাৎ a এর মান ১ বাড়ানো হয়েছে। এরপর ৪ নাম্বার লাইন এ a এর মান প্রিন্ট করে দেখা হয়েছে। এরপর ৫ নাম্বার লাইন এ b এর মান b-- এর মাধ্যমে ১ কমানো হয়েছে। এরপর ৬ নাম্বার লাইন এ b এর মান দেখা হয়েছে। এখন ৭ নাম্বার লাইন এ printf() এর ভিতর ইউনারি ব্যবহার করে c এর মান ১ বাড়ানো হয়েছে। ভ্যারিয়েবল এর পর ইউনারি ব্যবহার করে printf() এর ভিতর ১ বাড়ানো হলে, ভ্যারিয়েবল এর মান বাড়বে কিন্তু এই printf() এ প্রিন্ট করবে আগের মান। printf() এর ভিতর মান বাড়িয়ে সাথে সাথে প্রিন্ট করার জন্য ভ্যারিয়েবল এর আগে ইউনারি ব্যবহার করতে হবে ৮ নাম্বার লাইন এ ++d এর মত।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">
                    তুলনা (relational) অপারেটর, অপারেটর,উদাহরণ,ব্যবহার
                  </p>
                  <p class="">
                        <   <br>
                        x < 5   <br>
                        less then   <br>
                        <=  <br>
                        x <= 5  <br>
                        less then or equal  <br>
                        >   <br>
                        x > 5   <br>
                        greater then    <br>
                        >=  <br>
                        x >= 5  <br>
                        greater then or equal   <br>
                        ==  <br>
                        x == 5  <br>
                        equal equal <br>
                        !=  <br>
                        x != 5  <br>
                        not equal   <br>
                  </p>
                  <p class="">
                    <b>উদাহরনঃ (তুলনা (relational) অপারেটর)</b>
                  </p>
                  <ol>
                    <li>int a = 5, b = 10, c = 4, d = 5, r1, r2, r3, r4;</li>
                    <li>r1 = a < b;</li>
                    <li>r2 = a > b;</li>
                    <li>r3 = c != d;</li>
                    <li>r4 = a == d;</li>
                    <li>printf("r1: %d\nr2: %d\nr3: %d\nr4: %d\n", r1, r2, r3, r4);</li>
                    <li>r1: 1</li>
                    <li>r2: 0</li>
                    <li>r3: 1</li>
                    <li>r4: 1</li>
                  </ol>
                  <p class="">এখানে ১ নাম্বার লাইন এ ৪ টা ভ্যারিয়েবল এ কিছু মান নেওয়া হয়েছে। ২ থেকে ৫ নাম্বার লাইন পর্যন্ত দুইটি ভ্যারিয়েবল নিয়ে রিলেশনাল অপারেটর এর মাধ্যেম সত্য বা মিথ্যা যাচাই করা হয়েছে। সত্য হলে নতুন ভ্যারিয়েবল এ ১ থাকবে আর মিথ্যা হলে ০ থাকবে। নিচে ৬ নাম্বার লাইন এ প্রিন্ট করে দেখানো হয়েছে কোন ভ্যারিয়েবল এ কে আছে। ২ নাম্বার লাইন এ a < b করা হয়েছে। এটি সত্য তাই r1 এ ১ আছে। আবার ৩ নাম্বার লাইন এ a > b করা হয়েছে যা মিথ্যা তাই r2 এ ০ আছে। এভাবে ৪ ও ৫ নাম্বার লাইন এ c!=d ও a==d করে সত্য হওয়ায় r3 ও r4 এ ১ আছে।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">লজিকাল (logical) অপারেটর উদাহরণ ব্যবহার</p>
                  <p class="">||<br>
                    if(x < 5 || y > 3)<br>
                    লজিকাল অর অপারেশন<br>
                    &&<br>
                    if(x > 5 && y < 3)<br>
                    লজিকাল এন্ড অপারেশন<br>
                    !<br>
                    if( !x )<br>
                    লজিকাল নট অপারেশন</p>
                    <p class=""><b>উদাহরনঃ (লজিকাল (logical) অপারেটর)</b></p>
                    <ol>
                        <li>int a = 1, b = 0;</li>
                        <li>printf("a&&b: %d\n", a&&b);</li>
                        <li>printf("a||b: %d\n", a||b);</li>
                        <li>printf("!a : %d\n", !a);</li>
                        <li>a&&b: 0</li>
                        <li>a||b: 1</li>
                        <li>!a: 0</li>
                    </ol>
                    <p class="">
                        এখানে ১ নাম্বার লাইন এ দুইটি ভ্যারিয়েবল নেওয়া হয়েছে। ২ নাম্বার লাইন এ a&&b এর ফলাফল প্রিন্ট করা হয়েছে। a ও b এর মধ্যে লজিকাল অ্যান্ড করলে ০ পাওয়া যায়। ৩ নাম্বার লাইন এ a||b এর ফলাফল প্রিন্ট করা হয়েছে। a ও b এর মধ্যে লজিকাল অর করলে ১ পাওয়া যায়। ৪ নাম্বার লাইন এ !a এর ফলাফল প্রিন্ট করা হয়েছে। এখানে a তে ১ আছে একে নট করলে ০ পাওয়া যায়। আমরা জানি লজিকাল নট মানে বিপরীত বুঝায়।
                    </p>
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