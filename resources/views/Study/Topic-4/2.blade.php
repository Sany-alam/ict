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
            <a href="#">৪.২ ট্যাগ এবং এলিমেন্ট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">Tag</p><hr>
                  <p>HTML tag হলো কিছু কি-ওয়ার্ড বা কিছু মূলশব্দ বা কিছু বর্ণের সমষ্টি, যে গুলো দ্বারা বিভিন্ন element কে নির্দেশ/নামকরন করা হয়।</p>
                  <ol>
                      <li>Tag সমূহ কৌণিক ব্রাকেট (<, >) দ্বারা অবদ্ধ থাকে। যেমনঃ &lt;p&gt;, &lt;b&gt;, &lt;i&gt; ইত্যাদি।</li>
                      <li>Tag সমূহ শুরু করতে হয় এভাবে &lt;tag&gt; এবং শেষ করতে হয় এভাবে &lt;/tag&gt;। শুরুর tag কে opening tags এবং শেষ tag কে closing tag বলে। <br>যেমনঃ &lt;b&gt;bold&lt;/b&gt;, &lt;p&gt;paragraph&lt;/p&gt; ইত্যাদি।</li>
                      <p><b>&lt;tagname&gt;</b>content<b>&lt;/tagname&gt;</b></p>
                      <li>HTML 5 অনুযায়ী ট্যাগ শেষ করতেই হবে এরকম বাধ্যবাধকতা নেই। অর্থাৎ একটি tag এর কাজ শেষ হলে পরবর্তী tag শুরু করা যাবে। আগের tag শেষ তা দেখিয়ে দেয়ার দরকার নেই।</li>
                    </ol>
                </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">Element</p><hr>
                  <p class="">Element বলতে বিষয়বস্তু বুঝানো হয়। আগেই বলা হয়েছে element সমূহ বিভিন্ন tag দ্বারা আবদ্ধ থাকে। যেমনঃ একটি প্যারাগ্রাফ element নিচে দেখানো হলঃ </p>
                </div>
                <div class="topic-parts-code">
                    <p><b>&lt;p&gt;</b>This is a paragraph <b>&lt;/p&gt;</b></p>
                </div>
                <div class="topic-parts">
                    <p>এখানে &lt;p&gt; থেকে &lt;/p&gt; পর্যন্ত সম্পূর্ণ একটি p এলিমেন্ট। আর "This is a paragraph." হল এলিমেন্ট কনটেন্ট/ অভ্যান্তরস্থ উপাদান।</p>
                </div>
                <div class="topic-parts-code">
                    <p><b>&lt;body&gt;</b><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<b>&lt;p&gt;</b>This is a paragraph.<b>&lt;/p&gt;</b><br>
                    <p><b>&lt;/body&gt;</b></p>
                </div>
                <div class="topic-parts">
                    <p>এখানে &lt;body&gt; থেকে &lt;/body&gt; পর্যন্ত একটি body এলিমেন্ট। যার ভিতর আবার একটি p এলিমেন্টও আছে।</p>
                    <p>তো বলা যায় এলিমেন্টের ভিতর এলিমেন্ট থাকতে পারে।</p>
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