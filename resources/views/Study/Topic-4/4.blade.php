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
            <a href="#">৪.৪ HTML ফাইলের বিভিন্ন অংশ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts">
              <p class="question text-light-primary">HTML ফাইলের বিভিন্ন অংশ</p><hr>
              <p>নিচে একটি HTML পাতার উদাহরণ দেয়া হলঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;!DOCTYPE html&gt;<br>
                    &lt;html&gt;<br>
                    &nbsp;&nbsp;&lt;head&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;My website title&lt;/title&gt;<br>
                    &nbsp;&nbsp;&lt;/head&gt;<br>
                    &nbsp;&lt;&nbsp;body&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;This is a heading&lt;/h1&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This is a paragraph&lt;/p&gt;<br>
                    &nbsp;&nbsp;&lt;/body&gt;<br>
                    &lt;/html&gt;
                </h1>
            </div>
            <div class="topic-parts">
              <p>নোটপ্যাড এ নিচের কোড গুলো সরাসরি লিখে HTML ডকুমেন্ট হিসেবে সংরক্ষন করে ব্রাউজারে চালু করে দেখ। এই কোডের জন্য প্রিভিউ হবে নিচের মতঃ</p>
              <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap4/5.png" alt="">
            </div>
            <div class="topic-parts">
                  <p class="question text-light-primary">তো কিভাবে কি হল?</p><hr>
                  <p class="">বিস্তারিত দেখা যাক নিচেঃ </p>
                </div>
                <div class="topic-parts-code">
                <h1>&lt;!DOCTYPE html&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p><b>&lt;!DOCTYPE&gt;</b>এটিকে HTML ফাইলের সব শুরুতে লিখা (declare করা) হয়। এটি ডকুমেন্ট এর ধরন প্রকাশ করে। যেমনঃ উপরের <b>&lt;!DOCTYPE html&gt;</b> নির্দেশ করে যে এটি একটি HTML ডকুমেন্ট।<br>এর আরেকটি কাজ আছে! HTML এর অনেকগুলো সংস্করণ আছে। সংস্করণ ভেদে HTML কোড এ পার্থক্য থাকে। <b>&lt;!DOCTYPE&gt;</b> দ্বারা আপনার HTML ফাইলটি কত সংস্করণকে ভিত্তি করে লিখা তা ব্রাউজারকে জানানো হয়। ফলে ব্রাউজার সহজে এবং সঠিকভাবে আপনার HTML ফাইলকে ব্রাউজারে দেখাতে পারে। উপরের উদাহরণের <b>&lt;!DOCTYPE&gt;</b> টি HTML5 কে নির্দেশ করে। অর্থাৎ আমাদের ফাইলটি HTML5 এর সকল নিয়ম মেনে তৈরি করা। অন্যান্য সংস্করণের জন্য <b>&lt;!DOCTYPE&gt;</b> কি হবে তা পাবে এখানে।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;html&gt;<br>...<br>&lt;/html&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ tag দুটির ভিতরই ওয়েবপেজের সকল কোড লিখতে হবে। Tag দুটি HTML ডকুমেন্ট এর শুরু শেষ নির্দেশ করে।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;head&gt;<br>...<br>&lt;/head&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ দুটি tag এর ভিতর যা যা লিখা হবে তা ব্রাউজারে দেখাবে না। এ অংশে মূলত &lt;title&gt;, &lt;meta&gt;, &lt;link&gt; ইত্যাদি tag দ্বারা ডকুমেন্ট সম্পর্কিত বিষয়াবলী নির্দিষ্ট করা হয় এবং ওয়েবপেজ সম্পর্কে সব তথ্য দেয়া হয়।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;title&gt;My website title&lt;/title&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ tag টি ব্যবহার করে ওয়েবপেজে শিরোনাম (যা ব্রাউজার এর টাইটেল বারে দেখায়) যুক্ত করা হয়।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;body&gt;<br>...<br>&lt;/body&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ tag দুটির মাঝখানে যা যা লিখবে সব ব্রাউজারে প্রদর্শিত হবে। দ্রষ্টব্যঃ tag শব্দ (যেমনঃ &lt;p&gt; ইত্যাদি) গুলো কিন্তু ব্রাউজারে দেখা যাবেনা।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;h1&gt;This is a heading&lt;/h1&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ tag টি হেডিং লেখা নির্দেশ করে। হেডিং বলতে শিরোনাম বুঝানো হয়।</p>
                </div>
                <div class="topic-parts-code">
                  <h1>&lt;p&gt;This is a paragraph&lt;/p&gt;</h1>
                </div>
                <div class="topic-parts">
                  <p>এ tag টি প্যারাগ্রাফ লেখা নির্দেশ করে।</p>
                  <p>এ ধরনের ট্যাগ নিয়ে বিস্তারিত পরের অধ্যয় গুলোতে আলোচনা করা হবে।</p>
                </div>
                <div class="topic-parts">
                    <p class="question text-light-primary">HTML কাঠামো</p><hr>  
                    <p>উপরের ডকুমেন্টটিকে নিচের কাঠামোর সাথে তুলনা করা যায়।</p>
                    <img class="col-sm-12 col-md-8 responsive" src="{{ asset('assets') }}/images/chapter/chap4/6.png" alt="">
                </div>
                <div class="topic-parts-imp">
                    <p class="question text-light-primary">সব HTML tag কি ছোট হাতের অক্ষর দিয়েই লিখতে হবে?</p><hr>
                    <p>অবশ্যই না। HTML case sensitive (বড় হাতের অক্ষর/ছোট হাতের অক্ষর সংবেদনশীল) না। অথ্যাৎ &lt;TAG&gt; এবং &lt;tag&gt; দুটোই HTML এ একই কথা। তবে আদর্শ হচ্ছে ছোট হাতের অক্ষর ব্যবহার করা। বড় হাতের অক্ষর ব্যবহার করলে কিছু ক্ষেত্রে সমস্যা হতে পারে। HTML এ tag, element, attribute, attributes value ইত্যাদি সব কিছুর ক্ষেত্রেই এটি প্রযোজ্য। W3C ছোট হাতের অক্ষর ব্যবহার করার পরামর্শ (recommend) দিয়েছে।</p>
                </div>
                <div class="topic-parts">
                    <p class="question text-light-primary">কোডকে সুন্দর/বোধগম্য করা</p><hr>
                    <p>উপরের HTML কোডটিকে নিচের মত করেও লিখা যায়ঃ</p>
                </div>
                <div class="topic-parts-code">
                    <h1>
                        &lt;!DOCTYPE html&gt;<br>
                        &lt;html&gt;<br><br>
                        &nbsp;&nbsp;&lt;head&gt;<br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;title&gt;My website title&lt;/title&gt;<br><br>
                        &nbsp;&nbsp;&lt;/head&gt;<br><br>
                        &nbsp;&lt;&nbsp;body&gt;<br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;h1&gt;This is a heading&lt;/h1&gt;<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&lt;p&gt;This is a paragraph&lt;/p&gt;<br><br>
                        &nbsp;&nbsp;&lt;/body&gt;<br><br>
                        &lt;/html&gt;
                    </h1>
                </div>
                <div class="topic-parts">
                    <p>এভাবে লিখলে কোড দেখতেও সুন্দর লাগে, সহজে বুঝাও যায়। HTML ডকুমেন্ট যখন ব্রাউজারে লোড করা হয় তখন সকল স্পেসসমূহ ব্রাউজার উপেক্ষা (ignore) করে, তাই এভাবে সাজালে ডকুমেন্টের কোনো ক্ষতি হয়না। এরকম না সাজালে সমস্যা নেই, তবে এভাবে সাজানো অভ্যাস করা উচিত। কিছু এডিটর নিজ দায়ীত্বেও এ কাজটি করে থাকে। যেমনঃ notepad++, brackets, dremeweaver ইত্যাদি।</p>
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