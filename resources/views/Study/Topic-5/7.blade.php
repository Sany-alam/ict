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
            <a href="#">৫.৫ অপারেটর</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">অপারেটর</p><hr>
                  <p>আমরা গানিতিক কাজে যে +, -, ×, ÷ ইত্যাদি ব্যবহার করি এগুলোকেই অপারেটর বলে।<br>সি ভাষায় কয়েকধরনের অপারেটর রয়েছে। সব ধরনের অপারেটর টেবিল আকারে নিচে দেওয়া আছেঃ</p>
                </div>
                <div class="topic-parts">
                  <p class="question text-light-primary">বীজগনিতিক (Arithmetic) অপারেটর</p><hr>
                  <table class="col-md-8 col-sm-12">
                  <tr>
                  <th>অপারেটর</th>
                  <th>ব্যবহার</th>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">+</td>
                  <td>যোগ অপারেটর</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">-</td>
                  <td>বিয়োগ অপারেটর</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">*</td>
                  <td>গুন অপারেটর</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">/</td>
                  <td>ভাগ অপারেটর</td>
                  </tr>
                  <tr>
                  <td>%</td>
                  <td>ভাগশেষ অপারেটর, একে modulus অপারেটর বলে।</td>
                  </tr>
                  </table>
              </div>

              <div class="topic-parts-code">
                  <h1>
                    int a = 1, b = 2, c = 3, d = 4 ;<br>
                    printf("Initial value of a = 1, b = 2, c = 3, d = 4\n");<br>
                    printf("value of a + b : %d\n", a + b);<br>
                    printf("value of c + d + b : %d\n", c + d + b);<br>
                    printf("value of d - a : %d\n", d - a);
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    Initial value of a = 1, b = 2, c = 3, d = 4 <br>
                    value of a + b : 3<br>
                    value of c + d + b : 9<br>
                    value of d - a : 3</p>
                 </div>
                 <div class="topic-parts">
                   <p>এখানে ১ নাম্বার লাইন এ ৪ টা ভ্যারিয়েবল এ কিছু মান নেওয়া হয়েছে। ২ থেকে ৫ পর্যন্ত লাইন এ কয়েকটি অপারেশন প্রিন্ট করা হয়েছে। ২ নাম্বার লাইন এ a এর সাথে b কে যোগ করে প্রিন্ট করা হয়েছে। আবার ৪ নাম্বার লাইন এ d থেকে a কে বিয়োগ দেওয়া হয়েছে।</p>
                  </div>

                  <div class="topic-parts">
                  <p class="question text-light-primary">ইউনারি (unary) অপারেটর</p><hr>
                  <table class="col-md-8 col-sm-12">
                  <tr>
                  <th>অপারেটর</th>
                  <th>উদাহরণ</th>
                  <th>ব্যবহার</th>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">++</td>
                  <td>i++;<br>++i;</td>
                  <td>যে ভ্যারিয়েবল বা অপারেন্ড এর সাথে থাকবে তার মান এক বাড়াবে</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">--</td>
                  <td>i--;<br>--i;</td>
                  <td>যে ভ্যারিয়েবল বা অপারেন্ড এর সাথে থাকবে তার মান এক কমাবে</td>
                  </tr>
                  </table>
              </div>
              
              <div class="topic-parts-code">
                  <h1>
                  int a = 1, b = 2, c = 3, d = 4 ;<br>
                  printf("Initial value of a = 1, b = 2, c = 3, d = 4\n");<br>
                  a++;<br>
                  printf("now value of a: %d\n", a);<br>
                  b--;<br>
                  printf("now value of b: %d\n", b);<br>
                  printf("c++: %d\n", c++);<br>
                  printf("++d: %d\n", ++d);
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    Initial value of a = 1, b = 2, c = 3, d = 4<br>
                    now value of a: 2<br>
                    now value of b: 1<br>
                    c++: 3<br>
                    ++d: 5
                  </p>
                 </div>
                 <div class="topic-parts">
                   <p>এখানে ১ নাম্বার লাইন এ ৪ টা ভ্যারিয়েবল এ কিছু মান নেওয়া হয়েছে। ৩ নাম্বার লাইন এ ইউনারি অপারেটর এর মাধ্যমে a++ করা হয়েছে অর্থাৎ a এর মান ১ বাড়ানো হয়েছে। এরপর ৪ নাম্বার লাইন এ a এর মান প্রিন্ট করে দেখা হয়েছে। এরপর ৫ নাম্বার লাইন এ b এর মান b-- এর মাধ্যমে ১ কমানো হয়েছে। এরপর ৬ নাম্বার লাইন এ b এর মান দেখা হয়েছে। এখন ৭ নাম্বার লাইন এ printf() এর ভিতর ইউনারি ব্যবহার করে c এর মান ১ বাড়ানো হয়েছে। ভ্যারিয়েবল এর পর ইউনারি ব্যবহার করে printf() এর ভিতর ১ বাড়ানো হলে, ভ্যারিয়েবল এর মান বাড়বে কিন্তু এই printf() এ প্রিন্ট করবে আগের মান। printf() এর ভিতর মান বাড়িয়ে সাথে সাথে প্রিন্ট করার জন্য ভ্যারিয়েবল এর আগে ইউনারি ব্যবহার করতে হবে ৮ নাম্বার লাইন এ ++d এর মত।</p>
                  </div>

                  <div class="topic-parts">
                  <p class="question text-light-primary">তুলনা (relational) অপারেটর</p><hr>
                  <table class="col-md-8 col-sm-12">
                  <tr>
                  <th>অপারেটর</th>
                  <th>উদাহরণ</th>
                  <th>ব্যবহার</th>
                  </tr>
                  <tr>
                  <td style="font-size:20px;"><</td>
                  <td>x < 5</td>
                  <td>less then</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;"><=</td>
                  <td>x <= 5</td>
                  <td>less then or equal</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">></td>
                  <td>x > 5</td>
                  <td>greater then</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">>=</td>
                  <td>x >= 5</td>
                  <td>greater then or equal </td>
                  </tr>
                  <tr>
                  <td>==</td>
                  <td>x == 5</td>
                  <td>equal equal</td>
                  </tr>
                  <tr>
                  <td>!=</td>
                  <td>x != 5</td>
                  <td>not equal</td>
                  </tr>
                  </table>
              </div>

              <div class="topic-parts-code">
                  <h1>
                  int a = 5, b = 10, c = 4, d = 5, r1, r2, r3, r4;<br>
                  r1 = a < b;<br>
                  r2 = a > b;<br>
                  r3 = c != d;<br>
                  r4 = a == d;<br>
                  printf("r1: %d\nr2: %d\nr3: %d\nr4: %d\n", r1, r2, r3, r4);
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    r1: 1<br>
                    r2: 0<br>
                    r3: 1<br>
                    r4: 1</p>
                 </div>
                 <div class="topic-parts">
                   <p>এখানে ১ নাম্বার লাইন এ ৪ টা ভ্যারিয়েবল এ কিছু মান নেওয়া হয়েছে। ২ থেকে ৫ নাম্বার লাইন পর্যন্ত দুইটি ভ্যারিয়েবল নিয়ে রিলেশনাল অপারেটর এর মাধ্যেম সত্য বা মিথ্যা যাচাই করা হয়েছে। সত্য হলে নতুন ভ্যারিয়েবল এ ১ থাকবে আর মিথ্যা হলে ০ থাকবে। নিচে ৬ নাম্বার লাইন এ প্রিন্ট করে দেখানো হয়েছে কোন ভ্যারিয়েবল এ কে আছে। ২ নাম্বার লাইন এ a < b করা হয়েছে। এটি সত্য তাই r1 এ ১ আছে। আবার ৩ নাম্বার লাইন এ a > b করা হয়েছে যা মিথ্যা তাই r2 এ ০ আছে। এভাবে ৪ ও ৫ নাম্বার লাইন এ c!=d ও a==d করে সত্য হওয়ায় r3 ও r4 এ ১ আছে।</p>
                  </div>

                  <div class="topic-parts">
                  <p class="question text-light-primary">লজিকাল (logical) অপারেটর</p><hr>
                  <table class="col-md-8 col-sm-12">
                  <tr>
                  <th>অপারেটর</th>
                  <th>উদাহরণ</th>
                  <th>ব্যবহার</th>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">||</td>
                  <td>if (x < 5 || y > 3)</td>
                  <td>লজিকাল অর অপারেশন</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">&&</td>
                  <td>if (x < 5 && y > 3)</td>
                  <td>লজিকাল এন্ড অপারেশন</td>
                  </tr>
                  <tr>
                  <td style="font-size:20px;">!</td>
                  <td>if( !x )</td>
                  <td>লজিকাল নট অপারেশন</td>
                  </tr>
                  </table>
              </div>

              <div class="topic-parts-code">
                  <h1>
                  int a = 1, b = 10 ;<br>
                  printf( " a&&b: %d\n " , a&&b ) ;<br>
                  printf( " a||b: %d\n " , a||b ) ;<br>
                  printf( " !a : %d\n ", !a ) ;
                  </h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br>
                    a&&b : 0<br>
                    a||b : 1<br>
                    !a : 0</p>
                 </div>
                 <div class="topic-parts">
                   <p>এখানে ১ নাম্বার লাইন এ দুইটি ভ্যারিয়েবল নেওয়া হয়েছে। ২ নাম্বার লাইন এ a&&b এর ফলাফল প্রিন্ট করা হয়েছে। a ও b এর মধ্যে লজিকাল অ্যান্ড করলে ০ পাওয়া যায়। ৩ নাম্বার লাইন এ a||b এর ফলাফল প্রিন্ট করা হয়েছে। a ও b এর মধ্যে লজিকাল অর করলে ১ পাওয়া যায়। ৪ নাম্বার লাইন এ !a এর ফলাফল প্রিন্ট করা হয়েছে। এখানে a তে ১ আছে একে নট করলে ০ পাওয়া যায়। আমরা জানি লজিকাল নট মানে বিপরীত বুঝায়।</p>
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