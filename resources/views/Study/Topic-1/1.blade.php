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
            <a title="Back to 'some where'" class="page-back-arrow" href="{{ url('Study') }}"><i class="fa fa-arrow-left"></i></a>
            <!-- box title -->
            <a href="#">১. সংখ্যা পদ্ধতি</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <!-- <p class="question text-light-primary">Question is here?</p> -->
                  <p class="">গণনা এবং হিসাব-নিকাশের কাজে সংখ্যা ব্যবহার করা হয়। কোনো সংখ্যা লেখা বা প্রকাশ করার পদ্ধতিকেই সংখ্যা পদ্ধতি বলা হয়।<br>সংখ্যা পদ্ধতিকে দুই ভাগে ভাগ করা হয়ঃ</p>
                  <ol>
                      <li>অস্থানিক সংখ্যা পদ্ধতি (Non-positional Number System)</li>
                      <li>স্থানিক সংখ্যা পদ্ধতি (Positional Number System)</li>
                  </ol>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">অস্থানিক সংখ্যা পদ্ধতি (Non-positional Number System)</p>
                  <hr>
                  <p class="">যে সংখ্যা পদ্ধতির অংক সমূহে নিচের বৈশিষ্ট গুলো থাকে না তাদের অস্থানিক সংখ্যা পদ্ধতি বলেঃ </p>
                  <ol>
                      <li>প্রতিটি অংকের নিজস্ব মান</li>
                      <li>প্রতিটি অংকের স্থানীয় মান</li>
                      <li>সংখ্যা পদ্ধতির ভিত্তি (base)</li>
                  </ol>
                  <p class="">যেমনঃ রোমান সংখ্যা পদ্ধতি, হায়ারোগ্লিফিক্স সংখ্যা পদ্ধতি ইত্যাদি।</p>
              </div>

              <div class="topic-parts">
                  <p class="question text-light-primary">রোমান সংখ্যা পদ্ধতি একটি অস্থানিক সংখ্যা পদ্ধতি।</p>
                  <hr>
                  <p>I = 1<br>II = 2<br>III = 3<br>IV = 4<br>V = 5<br>VI = 6<br>VII = 7<br>VIII = 8<br>IX = 9<br>X = 10</p>
                  <p class="">রোমান সংখ্যা পদ্ধতির কোনো ভিত্তি (Base) নেই। এর প্রতিটি অংকের নির্দিষ্ট মান নেই। এখানের অংক গুলোর স্থানীয় মান নেই। প্রতিটি সংখ্যার আলাদা আলাদা মান থাকে। যেমনঃ V এর মান 5, IX এর মান 9 ইত্যাদি।</p>
                </div>
                <div class="topic-parts-imp">
                  <p>এক রোমান মেয়েকে তার মোবাইল নাম্বার দিতে বলা হলে সে কাগজে তার মোবাইল নাম্বার লিখে দিলঃ <br><b>"IIIVVIVIIIXIIIIVVIIIX"</b></p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">ভিত্তি (Base)</p>
                  <hr>
                  <p class="">কোনো সংখ্যা পদ্ধতিতে মোট যতগুলো মৌলিক চিহ্ন (অংক) ব্যবহার করা হয় তাকে ঐ সংখ্যা পদ্ধতির ভিত্তি বা Base বলে।<br>যেমনঃ দশমিক সংখ্যা পদ্ধতিতে ব্যবহৃত মৌলিক চিহ্ন ১০টি, এগুলো হল- ০, ১, ২, ৩, ৪, ৫, ৬, ৭, ৮, ৯; তাই এর ভিত্তি ১০। কোনো সংখ্যা পদ্ধতির ভিত্তি সংখ্যাটির ডানে-নিচে-কোনায় লিখা হয়। যেমনঃ
                  <p>Decimal ➡ (123)<sub>10</sub></p>
                  <p>Binary➡ (1111011)<sub>2</sub></p>
                  <p>Octal ➡ (173)<sub>8</sub></p>
                  <p>Hexa-decimal ➡ (7B)<sub>16</sub></p>
                  </p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">স্থানিক সংখ্যা পদ্ধতি (Positional Number System)</p>
                  <hr>
                  <p class="">যে সংখ্যা পদ্ধতির অংক সমূহে নিচের বৈশিষ্ট গুলো থাকে তাদের স্থানিক সংখ্যা পদ্ধতি বলেঃ</p>
                  <ol>
                      <li>প্রতিটি অংকের নিজস্ব মান</li>
                      <li>প্রতিটি অংকের স্থানীয় মান</li>
                      <li>সংখ্যা পদ্ধতির ভিত্তি (base)</li>
                  </ol>
                  <p class="">যেমনঃ দ্বিমিক (binary) সংখ্যা পদ্ধতি, দশমিক (decimal) সংখ্যা পদ্ধতি, অক্টাল (octal) সংখ্যা পদ্ধতি, হেক্সাডেসিম্যাল    (hexadecimal) সংখ্যা পদ্ধতি ইত্যাদি।</p>
              </div>
              <div class="topic-parts">
                  <p class="">দশমিক (decimal) সংখ্যা পদ্ধতি একটি স্থানিক সংখ্যা পদ্ধতি। এ সংখ্যা পদ্ধতিতে কোনো সংখ্যার প্রতিটি অংকের স্থানীয় মান আছে। এর ভিত্তি (base) আছে। দশমিক সংখ্যা পদ্ধতির ভিত্তি ১০। নিচে 1234 সংখ্যাটির স্থানীয় মান দেখানো হয়েছে।</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1/sp2.png" alt="">
                  <p class="">এখানে প্রতিটি অবস্থানের নির্দিষ্ট মান আছে। যেমনঃ ডান থেকে তৃতীয় অবস্থান আছে 2, ঐ অবস্থানের মান 10<sup>2</sup> = 100, তাই ঐ অবস্থানে 2 এর মান 2 × 100 = 200</p>
              </div>


              <div class="topic-arrow-buttons">
                  <div class="topic-next">
                    {{-- <button> --}}
                    <a href="{{ url('Study/Chapter-1/Topic-2') }}"><i class="fa fa-arrow-right"></i></a>
                    {{-- </button> --}}
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

