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
            <a href="#">৪.১১ মন্তব্য লিখা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts-imp">
              <p class="question text-light-primary">মন্তব্য</p><hr>
              <p>এইচটিএমএল কোড করার সময় চাইলে কোডের ভিতরে মন্তব্য (comment) দেওয়া যায়। মন্তব্য গুলো ব্রাউজারে দেখা যায়না।</p>
             <p>এইচটিএমএল এ মন্তব্য লিখা হয় &lt;!-- ... --&gt; এর ভিতর।</p>
              <p>এইচটিএমএল মন্তব্য এর গঠন হচ্ছেঃ</p>
              <p>&lt;!-- তোমার মন্তব্য --&gt;</p>
            <p>নিচে কিছু উদাহরণ দেওয়া হলঃ</p>
            </div>
            <div class="topic-parts-code">
                <h2>&lt;!-- This is a comment.  --&gt;</h2>
                <h1>&lt;p&gt;I'm first line&lt;/p&gt;</h1>
                <h2>&lt;!-- This is another comment.  --&gt;</h2>
                <h1>&lt;p&gt;I'm another line&lt;/p&gt;</h1>
                <h2>&lt;!-- This is multi-line comment.<br>Yes! this is second line  ;)  --&gt;</h2>
                <h1>&lt;p&gt;I'm the last line.&lt;/p&gt;</h1>

                </h1>
            </div>
            <div class="topic-parts-code-ans">
                <!-- This is a comment. -->
<p>I'm first line</p>
<!-- This is another comment.-->
<p>I'm another line.</p>
<!-- This is multi-line comment.
Yes! this is second line  ;) -->
<p>I'm the last line.</p>

        </div>
           

                <div class="topic-arrow-buttons">
                  <div class="topic-back">
                    <button>
                        <i class="fa fa-arrow-left"></i>
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