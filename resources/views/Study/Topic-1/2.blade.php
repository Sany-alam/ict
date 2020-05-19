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
            <a href="#">১.১ বিভিন্ন ধরণের সংখ্যা পদ্ধতি</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">দশমিক (decimal) সংখ্যা পদ্ধতি</p><hr>
                  <p class="">দশমিক সংখ্যা পদ্ধতির ভিত্তি ১০। এতে ব্যবহৃত অংক গুলো হলঃ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9</p>
                  <p>নিচে (1234)<sub>10</sub> সংখ্যাটির স্থানীয়মান দেখানো হলঃ</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.1/sp3.png" alt="">
                  <p>(1234)<sub>10</sub> এর দশমিক মান 1234</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">বাইনারি (binary) সংখ্যা পদ্ধতি</p><hr>
                  <p>bi- ব্যবহৃত হয় দুই বুঝাতে। বাইনারি সংখ্যা পদ্ধতির ভিত্তি ২। এতে ব্যবহৃত অংক গুলো হলঃ 0, 1</p>
                  <p>নিচে (1010)<sub>2</sub> সংখ্যাটির স্থানীয়মান দেখানো হলঃ</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.1/sp4.png" alt="">
                  <p>(1010)<sub>2</sub> এর দশমিক মান 10</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">অক্টাল (octal) সংখ্যা পদ্ধতি</p><hr>
                  <p>octa ব্যবহৃত হয় ৮ বুঝাতে। অক্টাল সংখ্যা পদ্ধতির ভিত্তি ৮। এতে ব্যবহৃত অংক গুলো হলঃ 0, 1, 2, 3, 4, 5, 6, 7</p>
                  <p>নিচে (1357)<sub>8</sub> সংখ্যাটির স্থানীয়মান দেখানো হলঃ</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.1/sp5.png" alt="">
                  <p>(1357)<sub>8</sub> এর দশমিক মান 751</p>
              </div>
              <div class="topic-parts">
                  <p class="question text-light-primary">হেক্সাডেসিম্যাল (hexa-decimal) সংখ্যা পদ্ধতি</p><hr>
                  <p>hexa ব্যবহৃত হয় ১৬ বুঝাতে। হেক্সাডেসিম্যাল সংখ্যা পদ্ধতির ভিত্তি ১৬। এতে ব্যবহৃত অংক গুলো হলঃ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F</p>
                  <p>নিচে (1A2B)<sub>16</sub> সংখ্যাটির স্থানীয়মান দেখানো হলঃ</p>
                  <img class="col-sm-12 col-md-4 responsive" src="{{ asset('assets') }}/images/chapter/chap1/1.1/sp6.png" alt="">
                  <p>(1A2B)<sub>16</sub> এর দশমিক মান 6699</p>
              </div>
              <div class="topic-parts">
                  <p class="">নিচে দশমিক, বাইনারি, অক্টাল এবং হেক্সাডেসিম্যাল সংখ্যা পদ্ধতিতে গণনা দেখানো হল।</p>
                  <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>Decimal</th>
                  <th>Binary</th>
                  <th>Octal</th>
                  <th>Hexa</th>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  <tr>
                  <td>2</td>
                  <td><b>10</b></td>
                  <td>2</td>
                  <td>2</td>
                  </tr>
                  <tr>
                  <td>3</td>
                  <td>11</td>
                  <td>3</td>
                  <td>3</td>
                  </tr>
                  <tr>
                  <td>4</td>
                  <td>100</td>
                  <td>4</td>
                  <td>4</td>
                  </tr>
                  <tr>
                  <td>5</td>
                  <td>101</td>
                  <td>5</td>
                  <td>5</td>
                  </tr>
                  <tr>
                  <td>6</td>
                  <td>110</td>
                  <td>6</td>
                  <td>6</td>
                  </tr>
                  <tr>
                  <td>7</td>
                  <td>111</td>
                  <td>7</td>
                  <td>7</td>
                  </tr>
                  <tr>
                  <td>8</td>
                  <td>1000</td>
                  <td><b>10</b></td>
                  <td>8</td>
                  </tr>
                  <tr>
                  <td>9</td>
                  <td>1001</td>
                  <td>11</td>
                  <td>9</td>
                  </tr>
                  <tr>
                  <td><b>10</b></td>
                  <td>1010</td>
                  <td>12</td>
                  <td>A</td>
                  </tr>
                  <tr>
                  <td>11</td>
                  <td>1011</td>
                  <td>13</td>
                  <td>B</td>
                  </tr>
                  <tr>
                  <td>12</td>
                  <td>1100</td>
                  <td>14</td>
                  <td>C</td>
                  </tr>
                  <tr>
                  <td>13</td>
                  <td>1101</td>
                  <td>15</td>
                  <td>D</td>
                  </tr>
                  <tr>
                  <td>14</td>
                  <td>1110</td>
                  <td>16</td>
                  <td>E</td>
                  </tr>
                  <tr>
                  <td>15</td>
                  <td>1111</td>
                  <td>17</td>
                  <td>F</td>
                  </tr>
                  <tr>
                  <td>16</td>
                  <td>10000</td>
                  <td>20</td>
                  <td><b>10</b></td>
                  </tr>
                  <tr>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  <td>...</td>
                  </tr>
                  </table>
                  <p>একই সংখ্যার মান বিভিন্ন সংখ্যা পদ্ধতি অনুযায়ী আলাদা হয়। যেমনঃ 10 এর মান বাইনারিতে 2, অক্টালে 8, হেক্সাডেসিম্যালে 16।</p>
              </div>

              <div class="topic-arrow-buttons">
                  <div class="topic-back">
                    <a href="{{ url('Study/Chapter-1/Topic-1') }}"><i class="fa fa-arrow-left"></i></a>
                  </div>
                  <div class="topic-next">
                    <a href="{{ url('Study/Chapter-1/Topic-3') }}"><i class="fa fa-arrow-right"></i></a>
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
