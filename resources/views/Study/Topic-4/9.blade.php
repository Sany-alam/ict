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
            <a href="#">৪.৯ টেবিল তৈরি করা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts">
              <p class="question text-light-primary">টেবিল</p><hr>
              <p>আমরা যখন কোন তথ্য উপস্থাপন করি, সাধারণত আমরা টেবিল ব্যবহার করি । এছাড়া, বিভিন্ন ধরনের উপাত্ত উপস্থাপন করার জন্য টেবিল ব্যবহার করে থাকি । একইভাবে, আমরা ওয়েবসাইটে কোন ধরনের উপাত্ত উপস্থাপন করার জন্য এইচটিএমএল টেবিল ব্যবহার করে থাকি । এইচটিএমএল টেবিল তৈরী করতে আমাদের বেশ কিছু ট্যাগ এর প্রয়োজন। প্রথমে আমরা ট্যাগ সম্পর্কে জেনে নেই ।</p>
              <ol>
              <li>আমাদের টেবিলের সব কিছু &lt;table&gt; ... &lt;/table&gt; ট্যাগের ভিতর থাকবে।</li>
              <li>প্রতিটি টেবিল হচ্ছে কিছু সারি এবং কলাম এর সমষ্টি।</li>
              <li>প্রতিটি কলাম তৈরীর জন্যে আমরা <b>&lt;tr&gt;</b> ট্যাগ ব্যবহার করব। tr এসেছে <b>t</b>able <b>r</b>ow থেকে।</li>
              <li>একটি সারির প্রতিটি কলামে মান বসানোর জন্যে আমরা tr ট্যাগের ভিতর <b>&lt;td&gt;</b> ট্যাগ ব্যবহার করব। td এসেছে <b>t</b>able <b>d</b>ata থেকে।</li>
              <li>টেবিল এর কলামের নামকরনের জন্যে আমরা <b>&lt;th&gt;</b> ট্যাগ ব্যবহার করব। th এসেছে <b>t</b>able <b>h</b>eading থেকে।</li>
              </ol>
              <p>মনে কর, আমরা নিম্নোক্ত টেবিলটি তৈরী করতে চাইঃ</p>
              <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>নাম</th>
                  <th>বয়স</th>
                  <th>রোল</th>
                  </tr>
                  <tr>
                  <td>ইসমাইল</td>
                  <td>২০</td>
                  <td>১</td>
                  </tr>
                  <tr>
                  <td>রিয়াদ</td>
                  <td>২০</td>
                  <td>২</td>
                  </tr>
                  <tr>
                  <td>সিয়াম</td>
                  <td>২০</td>
                  <td>৩</td>
                  </tr>
                </table>
                <p>এখানে দেখ, মোট ৩টি কলাম রয়েছে যাদের নামঃ নাম, বয়স, রোল।<br>তারপর আমরা৩টি কলামে ডাটা যুক্ত করয়েছি। মোট সারি = ৩ টি।</p>
                <p>এখন যদি তুমি টেবিলটি তৈরী করতে চাও তবে,</p>
            </div>
            <div class="topic-parts">
                <p><b>১.</b> প্রথমে দেখতে পাচ্ছ ৩টি কলাম রয়েছে। প্রথমেই আমাকে কলামগুলোর নামকরণ করতে হবে। নামকরণের জন্যে আমরা কি ট্যাগ ব্যবহার করি মনে আছে ত? উপরে আবার দেখে নিতে পার।</p>
                <p>তাহলে টেবিল এর ৩টি কলাম এর নামকরণের জন্যে আমাদের লিখতে হবেঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;table&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;নাম &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;বয়স &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;রোল &lt;/th&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &lt;/table&gt;
                </h1>
            </div>
            <div class="topic-parts-code-ans">
                <table style="color: rgb(255, 255, 255);">
                <tr>
                    <th>নাম</th>
                    <th>বয়স</th>
                    <th>রোল</th>
                </tr>
            </table>
        </div>
        <div class="topic-parts">
                <p><b>২.</b> এখন আমরা প্রতিটি কলামে, ডাটা এন্ট্রি করব <th> ট্যাগ ব্যবহার করে। এইভাবেঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;table&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;নাম &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;বয়স &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;রোল &lt;/th&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;রিয়াদ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;১ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;ইসমাইল &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;সিয়াম &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;৩ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &lt;/table&gt;
                </h1>
            </div>
            <div class="topic-parts-code-ans">
                <table style="color: rgb(255, 255, 255);">
                <tr>
                  <th>নাম</th>
                  <th>বয়স</th>
                  <th>রোল</th>
                  </tr>
                  <tr>
                  <td>ইসমাইল</td>
                  <td>২০</td>
                  <td>১</td>
                  </tr>
                  <tr>
                  <td>রিয়াদ</td>
                  <td>২০</td>
                  <td>২</td>
                  </tr>
                  <tr>
                  <td>সিয়াম</td>
                  <td>২০</td>
                  <td>৩</td>
                  </tr>
            </table>
        </div>
        <div class="topic-parts">
                <p>চাইলে "border" এট্রিবিঊট ব্যবহার করে আমরা টেবিল এর চারপাশে বর্ডার যোগ করতে পারিঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;table border="1" &gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;নাম &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;বয়স &lt;/th&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;রোল &lt;/th&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;রিয়াদ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;১ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;ইসমাইল &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &nbsp;&nbsp;&lt;tr&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;সিয়াম &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;২০ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;৩ &lt;/td&gt;<br>
                    &nbsp;&nbsp;&lt;/tr&gt;<br>
                    &lt;/table&gt;
                </h1>
            </div>
            <div class="topic-parts-code-ans">
                <table style="color: rgb(255, 255, 255); border: 1px solid white;">
                <tr style="border: 1px solid white;">
                  <th style="border: 1px solid white;">নাম</th>
                  <th style="border: 1px solid white;">বয়স</th>
                  <th style="border: 1px solid white;">রোল</th>
                  </tr>
                  <tr style="border: 1px solid white;">
                  <td style="border: 1px solid white;">ইসমাইল</td>
                  <td style="border: 1px solid white;">২০</td>
                  <td style="border: 1px solid white;">১</td>
                  </tr>
                  <tr style="border: 1px solid white;">
                  <td style="border: 1px solid white;">রিয়াদ</td>
                  <td style="border: 1px solid white;">২০</td>
                  <td>২</td>
                  </tr>
                  <tr style="border: 1px solid white;">
                  <td style="border: 1px solid white;">সিয়াম</td>
                  <td style="border: 1px solid white;">২০</td>
                  <td style="border: 1px solid white;">৩</td>
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