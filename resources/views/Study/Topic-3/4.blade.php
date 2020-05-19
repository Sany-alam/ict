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
            <a href="#">৩.৩ বিশেষ গেইট</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
                <p class="question text-light-primary">XOR gate (eXclusive OR)</p><hr>
                <p>XOR gate এর দুইটি ইনপুট এবং একটি আউটপুট থাকে। ইনপুট সমূহ একই না হলে এ গেইটের আউটপুট 1 হয়।<br>eXclusive OR গেইটের সাধারন সঙ্গা অনুযায়ী XOR গেইটের ইনপুট যদি বিজোড় সংখ্যা 1 হয় তাহলে আউটপুট 1, এবং ইনপুটে জোড় সংখ্যক 1 থাকলে আউটপুট 0। তবে XOR গেইটের ক্ষেত্রে ইনপুট বিপরিত হলে আউটপুট 1 এটা মনে রাখাই সহজ।<br><b>XOR গেইটের চিহ্ন &oplus; </b></p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি XOR gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo6.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য XOR gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.3/lg1.png" alt="">
                <p>উপরের সত্যক সারণি থেকে বলা যায়ঃ <br>XOR গেইটের ইনপুট সমূহ একই হলে আউটপুট 0 এবং ইনপুট গুলো একই না হলে আউটপুট 1।</p>
              </div>

              <div class="topic-parts-imp">
                <p>সত্যক সারণি থেকে যে কোনো লজিক গেইটের লজিক ফাংশন তৈরি করা সম্ভব। সত্যক সারণিতে যেগুলোর আউটপুট 1 সেগুলোর ইনপুট সমূহ নিয়ে লজিক ফাংশন তৈরি করা হয়। এক্ষেত্রে 0 কে ইনপুট এর NOT ধরা হয়।</p>
                </div>
                <div class="topic-parts">
                <p>উপরের সত্যক সারণিতে প্রথম 1 আউটপুটের জন্য ইনপুট হচ্ছে A=0 এবং B=1, তাই এর জন্য আমরা লিখবঃ</p>
                <p style="text-align:center;"><span>A</span> . B</p>
                <p>A এর মান 0 তাই A কে NOT করতে bar দেয়া হয়েছে।</p>
                <p>দ্বিতীয় 1 আউটপুটের জন্য ইনপুট হচ্ছে A=1 এবং B=0, তাই আমরা লিখবঃ</p>
                <p style="text-align:center;">A . <span>B</span></p>
                <p>B এর মান 0 তাই B কে NOT করতে bar দেয়া হয়েছে।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.3/lg2.png" alt="">
                <p>এবার সব গুলোকে OR দ্বারা একত্রে লিখলেই XOR এর লজিক ফাংশন পাওয়া যাবেঃ</p>
                <p style="text-align:center;">A &oplus; B = <span>A</span> . B + A . <span>B</span></p>
              </div>

              <div class="topic-parts-imp">
                <p class="question text-light-primary">XNOR gate (eXclusive NOR)</p><hr>
                <p>XNOR gate এর দুইটি ইনপুট এবং একটি আউটপুট থাকে। একটি XOR গেইটের আউটপুটের সাথে NOT গেইট যুক্ত করে দিলে XNOR গেইট তৈরি হয়।<br>XNOR গেইটের ক্ষেত্রে ইনপুট একই হলে আউটপুট 1 হয়।<br></p>
              </div>
              <div class="topic-parts">
                <p>নিচে ২টি ইনপুট যুক্ত একটি XNOR gate এর চিত্র দেয়া হল।</p>
                <video width="320" height="240" controls><source src="{{ asset('assets') }}/images/chapter/chap3/vdo/vdo7.MP4" type="video/mp4"></video>
                <br><br>
                <p>২টি ইনপুটের জন্য XNOR gate এর সত্যক সারণী নিচে দেয়া হল।</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.3/lg3.png" alt="">
                <p>উপরের সত্যক সারণিতে XOR গেইটের আউটপুট (A⊕B) দেখানো হয়েছে। XOR গেইটের আউটপুটকে NOT করলে XNOR গেইট পাওয়া যায়, তাই শেষ কলামে XOR গেইটের ফলাফল কে NOT করা হয়েছে <span>(A⊕B)</span>, যা হল XNOR গেইটের আউটপুট।</p>
                <p>উপরের সত্যক সারণিতে প্রথম 1 আউটপুটের জন্য ইনপুট হচ্ছে A=0 এবং B=0, তাই এর জন্য আমরা লিখবঃ</p>
                <p style="text-align:center;"><span>A</span> . <span>B</span></p>
                <p>A এবং B এর মান 0 তাই A এবং B কে NOT করতে bar দেয়া হয়েছে।</p>
                <p>দ্বিতীয় 1 আউটপুটের জন্য ইনপুট হচ্ছে A=1 এবং B=1, তাই আমরা লিখবঃ</p>
                <p style="text-align:center;">A . B</p>
                <img class="col-sm-12 col-md-6 responsive" src="{{ asset('assets') }}/images/chapter/chap3/3.3/lg4.png" alt="">
                <p>এবার সব গুলোকে OR দ্বারা একত্রে লিখলেই XNOR এর লজিক ফাংশন পাওয়া যাবেঃ</p>
                <p style="text-align:center;"><span>(A ⊕ B)</span>=<span>A</span> . <span>B</span> + A . B</p>
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