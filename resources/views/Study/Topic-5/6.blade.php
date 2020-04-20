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
            <a href="#">৫.৪ সি ভাষায় ইনপুট এবং আউটপুট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">সি ভাষায় আউটপুট</p><hr>
                  <p class="">আমরা প্রোগ্রামিং এ যে কাজ এই করি না কেনো আমাদের আউটপুট বের করতে হয়। আউটপুট প্রিন্ট বা দেখানোর জন্য সি ভাষায় একটি লাইব্রেরী ফাংশন আছে। ফাংশনটি হলো printf() । ফাংশনটি stdio.h হেডার ফাইল এর অন্তর্ভুক্ত। একটি সাধারন প্রোগ্রাম hello world প্রিন্ট করার প্রোগ্রামঃ</p>
                </div>
                
                <div class="topic-parts-code">
                    <h1>#include&lt;stdio.h&gt;</h1>
                    <br>
                    <h1>int main()<br>{<br></h1>
                    <h1>&nbsp;&nbsp;&nbsp;printf("Hello World!");<br></h1>
                    <h1>&nbsp;&nbsp;&nbsp;return 0;<br>}</h1>
                  </div>

                  <div class="topic-parts">
                    <p>উপরের কোড এ প্রথম লাইন এ হেডার ফাইল কে ইঙ্কলুড করা হয়েছে, এখানে stdio.h হেডার ফাইল সব সি প্রোগ্রাম এ ব্যবহার করতে হবে। এই হেডার ফাইল এর ভিতরে সব সি ভাষার সব বেসিক লাইব্রেরী ফাংশন যুক্ত আছে। আর printf() ফাংশন এ ব্র্যাকেট এর ভিতর ""(ডাবল কোটেশন) দিয়ে যেকোনো কিছু লিখলে তা প্রোগ্রামটি রান করার পর প্রিন্ট হবে।<br>এর মানে হল printf() এর ভিতরে যা লিখা হবে তা আউটপুট স্ক্রিন এ দেখাবে। অর্থাৎ লেখার ধরন হলঃ<br>printf("যা ইচ্ছা তাই");</p>
                  </div>
                  <div class="topic-parts">
                    <p class="question text-light-primary">ভেরিয়েবল এবং printf()</p><hr>
                    <p>ভ্যারিয়েবল নিয়ে কাজ করে ভ্যারিয়েবল আউটপুট দেওয়ার জন্য আমরা প্রথমে একটা সাধারন যোগ এর প্রোগ্রাম দেখিঃ</p>
                  </div>

                  <div class="topic-parts-code">
                    <h1>#include&lt;stdio.h&gt;</h1>
                    <br>
                    <h1>int main()<br>{<br>
                    &nbsp;&nbsp;&nbsp;int a = 10, b = 20, sum ;<br>
                    &nbsp;&nbsp;&nbsp;sum = a + b;<br>
                    &nbsp;&nbsp;&nbsp;printf("%d", sum);<br><br>
                    &nbsp;&nbsp;&nbsp;return 0;<br>}</h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল : <br>30</p>
                 </div>

                 <div class="topic-parts">
                    <p>এখানে দুটি পূর্ণসংখ্যার জন্য দুটি ভ্যারিয়েবল a, b এবং যোগফল রাখার জন্য sum ঘোষনা করা হয়েছে এবং a ও b তে ১০ এবং ২০ রাখা হয়েছে। a ও b যোগ করা হয়েছে এবং যোগফল sum এ রাখা হয়েছে। এরপর sum প্রিন্ট করা হয়েছে। এখানে "%d" ব্যবহার করা হয়েছে, কারন এখানে পূর্ণসংখ্যা বা int ডাটাটাইপ এর ভ্যারিয়েবল ছিল।</p>
                  </div>

                  <div class="topic-parts">
                    <p>অন্যান্য ডাটাটাইপ এ কি কি ব্যবহার করতে হবে তা টেবল আকারে নিচে দেওয়া হলঃ</p>
                  <table class="col-md-8 col-sm-12">
                  <tr>
                  <th>ডাটা টাইপ</th>
                  <th>printf() ফাংশন এ যা লিখা লাগবে</th>
                  <th>উদাহরণ</th>
                  </tr>
                  <tr>
                  <td>int (integer)</td>
                  <td>%d</td>
                  <td>printf("%d", x);</td>
                  </tr>
                  <tr>
                  <td>float</td>
                  <td>%f</td>
                  <td>printf("%f", x);</td>
                  </tr>
                  <tr>
                  <td>double</td>
                  <td>%lf</td>
                  <td>printf("%lf", x);</td>
                  </tr>
                  <tr>
                  <td>char (character)</td>
                  <td>%c</td>
                  <td>printf("%c", x);</td>
                  </tr>
                  </table>
                  <p> এখানে x রূপক অর্থে ব্যবহার করা হয়েছে। x হল যে মানটি প্রিন্ট করা হবে সেই মানটি যার কাছে আছে তার নাম। আগের প্রোগ্রাম টি তে sum ব্যবহার করা হয়েছিলো; কারন সেটিতে যোগফল এর মানটি sum integer type variable এর কাছে ছিল।</p>
              </div>

              <div class="topic-parts">
                  <p class="question text-light-primary">সি ভাষায় ইনপুট</p><hr>
                  <p class="">সি ভাষায় ভ্যারিয়েবল এ ইনপুট নেওয়ার জন্য লাইব্রেরী ফাংশন আছে। scanf() ফাংশন দিয়ে সি ভাষায় ইনপুট নেওয়া যায়। এই ফাংশনটিও stdio.h হেডার এর অন্তর্ভুক্ত। যেমনঃ</p>
                </div>
                
                <div class="topic-parts-code">
                    <h1>#include&lt;stdio.h&gt;</h1>
                    <br>
                    <h1>int main()<br>{<br>
                    &nbsp;&nbsp;&nbsp;int a ;<br>
                    &nbsp;&nbsp;&nbsp;scanf("%d", &a) ;<br>
                    &nbsp;&nbsp;&nbsp;printf("a = %d", a);<br><br>
                    &nbsp;&nbsp;&nbsp;return 0;<br>}</h1>
                  </div>
                  <div class="topic-parts-code-ans">
                    <p>ফলাফল :<br><span style="text-decoration:underline;">15</span><br>a = 15</p>
                 </div>
                 

                 <div class="topic-parts">
                    <p>উপরের প্রোগ্রামের ফলাফলে আন্ডারলাইন করা সংখ্যাটি আমাদের ইনপুট।<br>
                    এখানে পূর্ণসংখ্যার জন্য a ভারিয়েবল ঘোষনা করা হয়েছে।<br>
                    scanf() ফাংশন এর সাহায্যে a তে একটি পূর্ণসংখ্যা ইনপুট নেওয়া হয়েছে, এখানে printf() এরমত "" এর ভিতর %d দিয়ে ইনপুট নিতে হবে। উপরে টেবল এর মত বাকি সব ডাটাটাইপ এর জন্য printf() এর মত scanf() এর ক্ষেত্রেও একি হবে। কিন্তু scanf() এ ভ্যারিয়েবল এর আগে একটি "&" চিহ্ন দিতে হবে। "&" কে বলা হয় <b>ampersand</b>।<br>
                    scanf() এ প্রতি ভ্যারিয়েবল এর আগে <b>&</b> (এম্পারসেন্ড) চিহ্ন অবশ্যই দিতে হবে, নাহলে ইনপুট নেওয়া যাবে না।</p>
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