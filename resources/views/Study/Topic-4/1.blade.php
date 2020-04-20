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
            <a href="#">৪.১ প্রাথমিক আলোচনা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p class="question text-light-primary">HTML কী?</p><hr>
                  <p><b>HTML</b> = <b>H</b>yper <b>T</b>ext <b>M</b>arkup <b>L</b>anguage</p>
                  <p>HTML হল markup ভাষা। Markup বলতে বুঝায় কিছু উপাদান/কোড দ্বারা কিছুকে নির্দিষ্ট/চিহ্নিত (mark) করা।</p>
                  <p>HTML এর উপাদান হল tag। HTML ডকুমেন্ট এর বিভিন্ন অংশ tag দ্বারা নির্দিষ্ট করে দেয়া হয়। HTML ডকুমেন্ট হল tag এবং লেখার (plane text) সমষ্টি। HTML ডকুমেন্টকে ওয়েব পেজও বলে। ওয়েবসাইটের কাঠামো তৈরি করা হয় এ HTML দিয়ে।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">Markup মানে কি?</p><hr>
                  <p class=""><b>Markup</b> মানে কোনো কিছু নির্দিষ্ট করা। <b>Hyper Text</b> বলতে লেখা (text) বুঝায়, এই লেখাকে <b>HTML</b> ভাষা দিয়ে মার্কআপ করা হয়। </p>
                  <p class="">যেমনঃ নিচের প্যারাগ্রাফটি লক্ষ করুনঃ</p>
                </div>
                <div class="topic-parts-code">
                  <p style="color : #607d8b!important;"><b>Bangladesh</b><br>Bangladesh is a beautiful country in South-east Asia. Dhaka is the capital of Bangladesh. It achieved its independence in 1971. Bangladesh is a land of rivers. ...</p>
                </div>
                <div class="topic-parts">
                  <p>তো এখানে Bangladesh কে আমরা বিষয়বস্তু বা ইংরেজিতে heading বলি। তো HTML দিয়ে একে নির্দিষ্ট করা হয় এভাবেঃ</p>
                </div>
                  <div class="topic-parts-code">
                    <p><b>&lt;h1&gt;</b>Bangladesh<b>&lt;/h1&gt;</b></p>
                  </div>
                  <div class="topic-parts">
                  <p>এখানে <b>h1</b> এর <b>h</b> এসেছে <b>heading</b> থেকে।<br>আর বাকী লিখা গুলো প্যারাগ্রাফ। একে HTML এ নির্দিষ্ট করা হয় এভাবেঃ</p>
                </div>
                <div class="topic-parts-code">
                  <p><b>&lt;p&gt;</b>Bangladesh is a beautiful country... <b>&lt;/p&gt;</b></p>
                </div>
                <div class="topic-parts">
                  <p>এখানে <b>p</b> এসেছে <b>paragraph</b> থেকে। এরকম করে আমরা ওয়েবসাইটের বিভিন্ন বিষয়বস্তু <b>HTML</b> দিয়ে <b>markup</b> করব এবং ওয়েব ব্রাউজার গুলো এই <b>markup</b> গুলোকে পড়ে বিষয়বস্তু অনুয়ায়ী সেগুলোকে আলাদা করবে ও সাজাবে এবং আমরা যা করতে বলব তা করেবে।</p>
                <p>আশা করি <b>hyper text markup language</b> অর্থাৎ <b>HTML</b> টা কি তা পরিষ্কার হয়েছে। উপরের &lt;h1&gt;, &lt;p&gt; এগুলো নিয়ে একটু পরই জানতে পারবেন।</p>
            </div>
            <div class="topic-parts-imp">
                  <p><b>বিরাট ইতিহাস</b><br>
                  1991 - "First mention of HTML..."<br>••• ••• •••<br>1999 - HTML 4<br>2014 - HTML 5</p>
                </div>
                <div class="topic-parts">
                  <p class="question text-light-primary">HTML ফাইল extension</p><hr>
                  <p>HTML ডকুমেন্ট ফাইলে extension হিসেবে .html এবং .htm ব্যবহার করা।</p>
                  <p>Extension হল ফাইলের নামের শেষে ডট (.) যুক্ত অংশ, যা দেখে অপারেটিং সিস্টেম বুঝতে পারে ফাইলটি কি ফাইল।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">সফটওয়্যার সম্পর্কিত তথ্য</p><hr>
                  <p>HTML দিয়ে ওয়েবপেজ বানানো হয়। ওয়েবপেজ ইন্টারনেট Browser সফটওয়্যার (যেমনঃ Mozilla Firefox, Google Chrome, Internet Explorer (IE) ইত্যাদি) দ্বারা দেখা যায়। এ কাজটিকে Browsing বলা হয়।</p>
                  <p>HTML দিয়ে Coding করবেন কি দিয়ে? HTML কোডিং করা যায় বিভিন্ন টেক্স এডিটর দিয়ে। যেমনঃ নোটপ্যাড ইত্যাদি। তবে বিশেষ কিছু প্রোফেশনাল সফটওয়্যারই আছে HTML দিয়ে কাজ করার জন্য। যেমনঃ ড্রিমওয়েভার, ব্রাকেটস ইত্যাদি। তবে শেখার জন্য Notepad ই যথেষ্ট।</p>
              </div>
              

              <div class="topic-arrow-buttons">
                
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