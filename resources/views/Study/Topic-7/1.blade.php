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
            <a href="#">৭. এনক্রিপশন</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts-imp">
                  <p>Encryption এসেছে গ্রিক শব্দ kryptos থেকে, যার অর্থ লুকনো, গোপন।</p>
              </div>
              <div class="topic-parts">
                  <p>এনক্রিপশন হচ্ছে ডেটাকে পরিবর্তন করে এমন কিছু করা যাতে সাধারন ভাবে ওই ডেটা বুঝা না যায়।</p>
                  <p>ডেটা সুরক্ষিত করার জন্য এনক্রিপশন ব্যবহার করা হয়। ডেটা আদান-প্রদানের মাঝপথে যে কেউ ডেটা দেখে ফেলতে পারে। তাই ডেটাকে বিভিন্ন পদ্ধতিতে এমনভাবে প্রেরন করা হয় যাতে ডেটা গুলো মাঝপথে কেউ পেলেও বুঝতে না পারে। এটিই হচ্ছে এনক্রিপশন।<br>এছাড়া ডেটা সুরক্ষিতভাবে সংরক্ষনের ক্ষেত্রেও এনক্রিপশন ব্যবহার করা হয়ে থাকে।</p>
                  <p>ডেটাকে সুরক্ষিত করার জন্য যা করা হয় তাকে Encrypt করা বলে। আর সেই পরিবর্তিত ডেটা থেকে আসল ডেটায় রুপান্তরক করাকে Decrypt করা বলে।</p>
              </div>

              <div class="topic-parts">
                  <p class="question text-light-primary">এনক্রিপশনের বিভিন্ন অংশ</p><hr>
                  <p><b>Plaintext:</b> আসল ডেটা, যেটিকে এনক্রিপ্ট করতে হবে তাকে বলে Plaintext.</p>
                  <p><b>Ciphertext:</b> ডেটাকে এনক্রিপ্ট করার পর যে অবোধ্য ডেটা পাওয়া যায় তাকে বলে Ciphertext.</p>
                  <p><b>Encryption Algorithm:</b> এনক্রিপশন করার জন্য মূলত বিভিন্ন গাণিতিক পদ্ধতি ব্যবহার করা হয়। এ গাণিতিক পদ্ধতি গুলোকে বলে Encryption Algorithm.</p>
                  <p><b>Key:</b> এনক্রিপশনকে আমরা যদি তালার সাথে তুলনা করি তাহলে যেমন প্রতিটি তালার এক বা একাধিক চাবি থাকে তালা খুলার জন্য, সেরকম এনক্রিপ্ট করা ডেটাকে (ciphertext) আবার আসল ডেটায় (plaintext) রুপান্তর করার জন্য এক বা একাধিক চাবি (key) থাকে। Key দিয়ে ডেটা encrypt করা এবং decrypt করা হয়।</p>
                </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">এনক্রিপশনের ধরন</p>
                  <hr>
                  <p class="">এনক্রিপশন দুই ধরনের হতে পারে। যেমনঃ</p>
                  <ol>
                      <li>Symmetric Encryption বা Private/Secret Key Encryption</li>
                      <li>Asymmetric Entryption বা Public Key Encryption</li>
                  </ol>
                </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">Symmetric Encryption বা Private/Secret Key Encryption</p><hr>
                  <p>এ ধরনের এনক্রিপশনে শুধুমাত্র একটি key থাকে, যা দিয়েই encrypt এবং decrypt করা হয়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">Asymmetric Entryption বা Public Key Encryption</p><hr>
                  <p>এ ধরনের এনক্রিপশনে দুইটি key থাকে। একটি হল Private Key আরেকটি হল Public Key। একটি দিয়ে ডেটা encrypt করা হয় এবং আরেকটি দিয়ে ডেটা decrypt করা হয়।<br>Public Key যারা ডেটা পাঠাবে তাদের কাছে থাকে। যারা ডেটা পাঠাবে তারা Public Key দিযে ডেটা encrypt করে।<br>যার কাছে ডেটা পাঠানো হয় শুধু তার কাছেই Private Key থাকে। এবং শুধু মাত্র এ key দিয়েই encrypt করা ডেটা decrypt করা যায়।</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">Caesar Cipher</p><hr>
                  <p>একটি সহজ এবং বহুল পরিচিত এনক্রিপশন পদ্ধতি হচ্ছে Caesar Cipher. Caesar নামটি এসেছে রোমান সেনাপতি Julius Caesar এর নাম থেকে। তিনি বিভিন্ন গোপন বার্তা পাঠাতে এ পদ্ধতিটি ব্যবহার করতেন।<br>Julius Caesar, plaintext এর প্রতিটি অক্ষরকে তার পরের তৃতিয় অক্ষর দিয়ে পরিবর্তন করে cipher তৈরি করতেন। এখানে key হল 3।</p>
                </div>
                <div class="topic-parts" style="overflow-x:auto;">
                <p>key যদি 3 হয় তাহলে প্রতিটি অক্ষর নিচের সারণি অনুসারে পরিবর্তিত হবেঃ</p>
                  <table class="col-md-12 col-sm-12" >
                  <tr>
                  <th>A</th>
                  <th>B</th>
                  <th>C</th>
                  <th>D</th>
                  <th>E</th>
                  <th>F</th>
                  <th>G</th>
                  <th>H</th>
                  <th>I</th>
                  <th>J</th>
                  <th>K</th>
                  <th>L</th>
                  <th>M</th>
                  <th>N</th>
                  <th>O</th>
                  <th>P</th>
                  <th>Q</th>
                  <th>R</th>
                  <th>S</th>
                  <th>T</th>
                  <th>U</th>
                  <th>V</th>
                  <th>W</th>
                  <th>X</th>
                  <th>Y</th>
                  <th>Z</th>
                  </tr>
                  <tr>
                  <td>D</td>
                  <td>E</td>
                  <td>F</td>
                  <td>G</td>
                  <td>H</td>
                  <td>I</td>
                  <td>J</td>
                  <td>K</td>
                  <td>L</td>
                  <td>M</td>
                  <td>N</td>
                  <td>O</td>
                  <td>P</td>
                  <td>Q</td>
                  <td>R</td>
                  <td>S</td>
                  <td>T</td>
                  <td>U</td>
                  <td>V</td>
                  <td>W</td>
                  <td>X</td>
                  <td>Y</td>
                  <td>Z</td>
                  <td>A</td>
                  <td>B</td>
                  <td>C</td>
                  </tr>
                  </table>
                </div>
                <div class="topic-parts-imp">
                  <p>Caesar Cipher এনক্রিপশনে key = 3 দিয়ে নিচে একটি উদাহরণ দেখানো হলঃ</p>
                  <p><b>Planetext : </b> I LOVE BANGLADESH</p>
                  <p><b>Ciphertext : </b> L ORYH EDQJODGHVK</p>
                  <p>আমাদের অ্যাপে এনক্রিপশন সিমুলেশন ব্যবহার করে Caesar Cipher তৈরি এবং decrypt করতে পারবে।</p>
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