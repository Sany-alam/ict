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
            <a href="#">5.0 Topic - সি ভাষায় ইনপুট এবং আউটপুট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">সি ভাষায় আউটপুট</p>
                  <p class="">আমরা প্রোগ্রামিং এ যে কাজ এই করি না কেনো আমাদের আউটপুট বের করতে হয়। আউটপুট প্রিন্ট বা দেখানোর জন্য সি ভাষায় একটি লাইব্রেরী ফাংশন আছে। ফাংশনটি হলো printf() । ফাংশনটি stdio.h হেডার ফাইল এর অন্তর্ভুক্ত। একটি সাধারন প্রোগ্রাম hello world প্রিন্ট করার প্রোগ্রামঃ</p>
                  <p class="">return 0; <br>
                    int main()<br>
                    {<br>
                        printf("hello world!");<br>
                        return 0;<br>
                    }</p>
                    <p class="">উপরের কোড এ প্রথম লাইন এ হেডার ফাইল কে ইঙ্কলুড করা হয়েছে, এখানে stdio.h হেডার ফাইল সব সি প্রোগ্রাম এ ব্যবহার করতে হবে। এই হেডার ফাইল এর ভিতরে সব সি ভাষার সব বেসিক লাইব্রেরী ফাংশন যুক্ত আছে। আর printf() ফাংশন এ ব্র্যাকেট এর ভিতর ""(ডাবল কোটেশন) দিয়ে যেকোনো কিছু লিখলে তা প্রোগ্রামটি রান করার পর প্রিন্ট হবে।</p>
                    <p class="">এর মানে হল printf() এর ভিতরে যা লিখা হবে তা আউটপুট স্ক্রিন এ দেখাবে। অর্থাৎ লেখার ধরন হলঃ</p>
                    <p class="">printf("যা ইচ্ছা তাই");</p>
                    <p class="">ভেরিয়েবল এবং printf() ভ্যারিয়েবল নিয়ে কাজ করে ভ্যারিয়েবল আউটপুট দেওয়ার জন্য আমরা প্রথমে একটা সাধারন যোগ এর প্রোগ্রাম দেখিঃ</p>
                    <ol>
                        <li>return 0;</stdio.h></li>
                        <li>int main()</li>
                        <li>{</li>
                        <li>sum = a + b;</li>
                        <li>printf("%d", sum);</li>
                        <li>return 0;</li>
                        <li>}</li>
                        <li>30</li>
                    </ol>
                    <p class="">এখানে 4 নাম্বার লাইনে দুটি পূর্ণসংখ্যার জন্য দুটি ভ্যারিয়েবল a, b এবং যোগফল রাখার জন্য sum ঘোষনা করা হয়েছে এবং a ও b তে ১০ এবং ২০ রাখা হয়েছে। 5 নাম্বার লাইনে a ও b যোগ করা হয়েছে এবং যোগফল sum এ রাখা হয়েছে। এরপর 6 নাম্বার লাইনে sum প্রিন্ট করা হয়েছে। এখানে "%d" ব্যবহার করা হয়েছে, কারন এখানে পূর্ণসংখ্যা বা int ডাটাটাইপ এর ভ্যারিয়েবল ছিল। অন্যান্য ডাটাটাইপ এ কি কি ব্যবহার করতে হবে তা টেবল আকারে নিচে দেওয়া হলঃ</p>
                    <p class="">ডাটা টাইপ printf() ফাংশন এ যা লিখা লাগবে	উদাহরণ 
                        <br> int (integer)	%d	printf("%d", x);
                        <br> float	%f	printf("%f", x);
                        <br> double	%lf	printf("%lf", x);
                        <br> char (character)	%c	printf("%c", x);
                        <br> এখানে x রূপক অর্থে ব্যবহার করা হয়েছে। x হল যে মানটি প্রিন্ট করা হবে সেই মানটি যার কাছে আছে তার নাম। আগের প্রোগ্রাম টি তে sum ব্যবহার করা হয়েছিলো; কারন সেটিতে যোগফল এর মানটি sum integer type variable এর কাছে ছিল।
                    </p>
              </div>
              <div class="topic-parts">
                <p class="question text-light-primary">সি ভাষায় ইনপুট</p>
                <p class="">সি ভাষায় ভ্যারিয়েবল এ ইনপুট নেওয়ার জন্য লাইব্রেরী ফাংশন আছে। scanf() ফাংশন দিয়ে সি ভাষায় ইনপুট নেওয়া যায়। এই ফাংশনটিও stdio.h হেডার এর অন্তর্ভুক্ত। যেমনঃ</p>
                <ol>
                  <li>  #include< stdio.h></li>
                  <li>  int main()</li>
                  <li>  {</li>
                  <li>  int a;</li>
                  <li>  scanf("%d", &a);</li>
                  <li>  printf("a = %d", a);</li>
                  <li>  return 0;</li>
                  <li>  }</li>
                  <li>  15</li>
                  <li>  a = 15</li>
                </ol>
                <p class="">উপরের প্রোগ্রামের ফলাফলে আন্ডারলাইন করা সংখ্যাটি আমাদের ইনপুট।</p>
                <p class="">এখানে 4 নং লাইনে পূর্ণসংখ্যার জন্য a ভারিয়েবল ঘোষনা করা হয়েছে।</p>
                <p class="">5 নং লাইনে scanf() ফাংশন এর সাহায্যে a তে একটি পূর্ণসংখ্যা ইনপুট নেওয়া হয়েছে, এখানে printf() এরমত "" এর ভিতর %d দিয়ে ইনপুট নিতে হবে। উপরে টেবল এর মত বাকি সব ডাটাটাইপ এর জন্য printf() এর মত scanf() এর ক্ষেত্রেও একি হবে। কিন্তু scanf() এ ভ্যারিয়েবল এর আগে একটি "&" চিহ্ন দিতে হবে। "&" কে বলা হয় ampersand।</p>
                <p class="">scanf() এ প্রতি ভ্যারিয়েবল এর আগে & (এম্পারসেন্ড) চিহ্ন অবশ্যই দিতে হবে, নাহলে ইনপুট নেওয়া যাবে না।</p>
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