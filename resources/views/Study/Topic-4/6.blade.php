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
            <a href="#">৪.৬ &lt;body&gt; এর ট্যাগ সমূহ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts-imp">
              <p class="question text-light-primary">HTML body tag এর কিছু element tag এর সাথে পরিচিতি</p><hr>
              <p>আগের ধাপে জেনেছিলাম BODY ট্যাগের ভিতর যা লিখা হবে সব ব্রাউজারে দেখা যাবে। আর লিখাগুলো বা জিনিস গুলো কিভাবে থাকবে বা কোনটা কি তা বুঝিয়ে দেয়ার জন্য এইচটিএমএল ট্যাগ ব্যবহার করা হবে।</p>
              <p>নিচে &lt;body&gt; tag এর ভিতর ব্যবহৃত হয় এরকম কিছু HTML element tag এর পরিচয় দেয়া হল।</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;p&gt; tag</p><hr>
              <p>কোনো প্যারাগ্রাফ (paragraph) কে বুঝাতে &lt;p&gt; ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;p&gt;This is a paragraph text.&lt;/p&gt;<br> &lt;p&gt;The quick brown fox jumps over the lazy dog.&lt;/p&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>This is a paragraph text.</p>
              <p>The quick brown fox jumps over the lazy dog.</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, &lt;h6&gt; tag</p><hr>
              <p>এ tag টি হেডিং লেখা নির্দেশ করে। হেডিং বলতে শিরোনাম বুঝানো হয়।</p>
              <p>উদাহরণ কোডঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>
                    &lt;h1&gt;This is heading 1.&lt;/h1&gt;<br>
                    &lt;h2&gt;This is heading 2.&lt;/h2&gt;<br>
                    &lt;h3&gt;This is heading 3.&lt;/h3&gt;<br>
                    &lt;h4&gt;This is heading 4.&lt;/h4&gt;<br>
                    &lt;h5&gt;This is heading 5.&lt;/h5&gt;<br>
                    &lt;h6&gt;This is heading 6.&lt;/h6&gt;<br>
                </h1>
            </div>
            <div class="topic-parts-code-ans">
              <p style="font-size:30px;"><b>This is heading 1.</b></p>
              <p style="font-size:25px;"><b>This is heading 2.</b></p>
              <p style="font-size:20px;"><b>This is heading 3.</b></p>
              <p style="font-size:15px;"><b>This is heading 4.</b></p>
              <p style="font-size:10px;"><b>This is heading 5.</b></p>
              <p style="font-size:7px;"><b>This is heading 6.</b></p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;b&gt; এবং &lt;strong&gt; tag</p><hr>
              <p>কোনো লিখাকে মোটা (bold) করতে &lt;b&gt; এবং &lt;strong&gt; ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;b&gt;bold&lt;/b&gt; and &lt;strong&gt;strong&lt;/strong&gt; tags are same.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><b>bold</b> and <strong>strong</strong> tags are same.</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;i&gt; এবং &lt;em&gt; tag</p><hr>
              <p>কোনো লিখাকে বাঁকা (italic) করতে &lt;i&gt; এবং &lt;em&gt; ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;i&gt;italic&lt;/i&gt; and &lt;em&gt;emphasize&lt;/em&gt; tags are same.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><i>italic</i> and <em>emphasize</em> tags are same.</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;u&gt; এবং &lt;ins&gt; tag</p><hr>
              <p>কোনো লিখার নিচে দাগ (underline) দিতে  &lt;u&gt; এবং &lt;ins&gt; ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;u&gt;underline&lt;/u&gt; and &lt;ins&gt;insert&lt;/ins&gt; tags are same.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><u>underline</u> and <ins>insert</ins> tags are same.</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;strike&gt; এবং &lt;del&gt; tag</p><hr>
              <p>কোনো লিখাকে কেটে (strike) দিতে &lt;strike&gt; এবং &lt;del&gt; ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;strike&gt;strike&lt;/strike&gt; and &lt;del&gt;delete&lt;/del&gt; tags are same.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><strike>strike</strike> and <del>delete</del> tags are same.</p>
            </div>
            <div class="topic-parts">
              <p>উপরের ট্যাগ জোড়া গুলো একই কাজ করে। তো একই কাজের দুই ট্যাগ কেন দেয়া হল? আসলে ট্যাগ গুলো কিন্তু আলাদা আলাদা অর্থ প্রকাশ করে। তবে ব্রাউজারে ডিফল্ট ভাবে একই স্টাইল দেয়া থাকায় একই মনে হয়। চলো কোনটা কোথায় ব্যবহার করবো তা জানা যাক।</p>
              <table class="col-md-6 col-sm-12">
              <tr>
              <th>&lt;b&gt;</th>
              <td>লেখা bold করতে ব্যবহার করবে।</td>
              </tr>
              <tr>
              <th>&lt;strong&gt;</th>
              <td>গুরুত্বপূর্ণ লিখা হাইলাইট করতে ব্যবহার করবে।</td>
              </tr>
              </table><br>
              <table class="col-md-6 col-sm-12">
              <tr>
              <th>&lt;i&gt;</th>
              <td>লেখা italic/বাঁকা করতে ব্যবহার করবে।</td>
              </tr>
              <tr>
              <th>&lt;em&gt;</th>
              <td>গুরুত্বপূর্ণ লিখা হাইলাইট করতে ব্যবহার করবে।</td>
              </tr>
              </table><br>
              <table class="col-md-6 col-sm-12">
              <tr>
              <th>&lt;strike&gt;</th>
              <td>লেখা কাটার জন্য এ ট্যাগ ব্যবহার করবে।</td>
              </tr>
              <tr>
              <th>&lt;del&gt;</th>
              <td>লেখাটি মুছা হয়েছে/ বাদ দেয়া হয়েছে এ জাতীয় অর্থ বুঝালে এ ট্যাগটি ব্যবহার করবে।</td>
              </tr>
              </table><br>
              <table class="col-md-6 col-sm-12">
              <tr>
              <th>&lt;u&gt;</th>
              <td>লেখা underline করতে ব্যবহার করবে।</td>
              </tr>
              <tr>
              <th>&lt;ins&gt;</th>
              <td>কোনো লিখা insert অর্থাৎ যুক্ত করা হয়েছে বুঝাতে এ ট্যাগ ব্যবহার করবে। মূলত কোনো পোষ্টের/লেখার কোনো কিছু হালনাগাদ (update) করা হলে ঐ নতুন হালাগাদটি চিহ্নিত করতে এ ট্যাগ ব্যবহার করা হয়। এ ট্যাগটি &lt;del&gt; ট্যাগের সাথে ব্যবহার করা হয়।</td>
              </tr>
              </table>
            </div>
            
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;ins&gt; এর সাথে &lt;del&gt; tag</p><hr>
              <p>&lt;ins&gt; এর সাথে  &lt;del&gt; ট্যাগ ব্যবহারের একটি উদাহরণ নিচে দেওয়া হলঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>I live in &lt;del&gt;Dhaka&lt;/del&gt; &lt;ins&gt;Chittagong&lt;/ins&gt;.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>I live in <del>Dhaka</del> <ins>Chittagong</ins>.</p>
            </div>
            
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;sub&gt; tag</p><hr>
              <p>নিচে কোনায় কিছু লিখার জন্য এ ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>O&lt;sub&gt;2&lt;/sub&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>O<sub>2</sub></p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;sup&gt; tag</p><hr>
              <p>উপরে কোনায় কিছু লিখার জন্য এ ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>E = mc&lt;sup&gt;2&lt;/sup&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>E=mc<sup>2</sup></p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;big&gt; tag</p><hr>
              <p>লিখা বড় করার জন্য এ ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;big&gt;big&lt;/big&gt; text.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><big>big</big> text.</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;small&gt; tag</p><hr>
              <p>লিখা ছোট করার জন্য এ ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;small&gt;small&lt;/small&gt; text.</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p><small>small</small> text.</p>
            </div>

            <div class="topic-parts-imp">
              <p class="question text-light-primary">খালি ট্যাগ (Empty Tag)</p><hr>
              <p>কিছু ট্যাগ আছে যেগুলোর শেষ ট্যাগ লাগে না বা থাকে না, কারন এগুলোতে কোনো কন্টেন্ট থাকে না। এ গুলোকে empty HTML element বলে।</p>
              <p>কিছু Empty HTML ট্যাগ এলিমেন্ট গুলো নিচে দেওয়া হলঃ</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;br&gt; tag</p><hr>
              <p>&lt;br&gt; ট্যাগ এসেছে break থেকে। লাইন ভাগ করতে এ ট্যাগ ব্যবহৃত হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>First line &lt;br&gt;Second line</h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>First line<br>Second line</p>
            </div>
            <div class="topic-parts">
              <p class="question text-light-primary">&lt;hr&gt; tag</p><hr>
              <p>এটিও একটি empty HTML element ট্যাগ। শেষ লাগেনা। hr এসেছে horizontal rule থেকে। অনুভূমিক রেখা টানতে এ ট্যাগ ব্যবহার করা হয়।</p>
            </div>
            <div class="topic-parts-code">
                <h1>Some element or content.<br>
                &lt;hr&gt;<br>
                Some element or content.<br>
                &lt;hr width="50%"&gt;<br>
                Some element or content.
                </h1>
            </div>
            <div class="topic-parts-code-ans">
              <p>Some element or content.</p>
              <hr>
              <p>Some element or content.</p>
              <hr width="50%">
              <p>Some element or content.</p>
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