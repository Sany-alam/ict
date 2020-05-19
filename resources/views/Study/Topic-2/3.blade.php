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
            <a href="#">২.১ বুলিয়ান উপপাদ্য সমূহ</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts-imp">
          <p>বুলিয়ান অ্যালজেবরা সমাধান করার জন্য কিছু সূত্র/উপপাদ্য ব্যবহার করা হয়, সেগুলো নিচে দেয়া হল।</p>
          </div> 

          <div class="topic-parts">
          <p class="question text-light-primary">মৌলিক উপপাদ্য (Basic Theorem)</p>
          <p>যৌক্তিক যোগে যে কোনো একটি ইনপুট (operand) সত্য (1) হলে ফলাফল সত্য (1)।<br>OR বুঝাতে "+" চিহ্ন ব্যবহার করা হয়।</p>
          <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>উপপাদ্য</th>
                  <th>প্রমান</th>
                  </tr>
                  <tr>
                  <td>A + 0 = A</td>
                  <td>A = 1 হলে, 1 + 0 = 1<br>A = 0 হলে, 0 + 0 = 0<br>অর্থাৎ A এর মান যত ফলাফলও তত।</td>
                  </tr>
                  <tr>
                  <td>A . 0 = 0</td>
                  <td>A = 1 হলে, 1 . 0 = 0<br>A = 0 হলে, 0 . 0 = 0<br>অর্থাৎ সব ক্ষেত্রেই ফলাফল 0।</td>
                  </tr>
                  <tr>
                  <td>A + Ā = 1</td>
                  <td>A = 1 হলে, 1 + 0 = 1<br>A = 0 হলে, 0 + 1 = 1<br>অর্থাৎ সব ক্ষেত্রেই ফলাফল 1।</td>
                  </tr>
                  <tr>
                  <td>A . Ā = 0</td>
                  <td>A = 1 হলে, 1 . 0 = 0<br>A = 0 হলে, 0 . 1 = 0<br>অর্থাৎ সব ক্ষেত্রেই ফলাফল 0।</td>
                  </tr>
                  <tr>
                  <td>A + A = A</td>
                  <td>A = 1 হলে, 1 + 1 = 1<br>A = 0 হলে, 0 + 0 = 0<br>অর্থাৎ A এর মান যত ফলাফলও তত।</td>
                  </tr>
                  <tr>
                  <td>A . A = A</td>
                  <td>A = 1 হলে, 1 . 1 = 1<br>A = 0 হলে, 0 . 0 = 0<br>অর্থাৎ A এর মান যত ফলাফলও তত।</td>
                  </tr>
                  <tr>
                  <td>A + 1 = 1</td>
                  <td>A = 1 হলে, 1 . 1 = 1<br>A = 0 হলে, 0 + 1 = 1<br>অর্থাৎ সব ক্ষেত্রেই ফলাফল 1।</td>
                  </tr>
                  <tr>
                  <td>A . 1 = A</td>
                  <td>A = 1 হলে, 1 . 0 = 0<br>A = 0 হলে, 0 . 1 = 0<br>অর্থাৎ A এর মান যত ফলাফলও তত।</td>
                  </tr>
                  </table>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">বিনিময় উপপাদ্য (Commutative Theorem)</p><hr>
          <p><b>উপপাদ্য</b><br>A + B = B + A<br>A . B = B . A</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">অনুষঙ্গ উপপাদ্য (Associative Theorem)</p><hr>
          <p><b>উপপাদ্য</b><br>A + (B + C) = (A + B) + C<br>A . (B . C) = (A . B) . C</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">বিভাজন উপপাদ্য (Distributive Theorem)</p><hr>
          <p><b>উপপাদ্য</b><br>A . (B + C) = (A . B) + (A . C)<br>A + (B . C) = (A + B) . (A + C)</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">ডি-মরগ্যানের উপপাদ্য (De-Morgan Theorem)</p><hr>
          <p><b>উপপাদ্য</b><br><span>A + B</span> = <span>A</span> . <span>B</span><br><span>A . B</span> = <span>A</span> + <span>B</span></p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">সংক্ষিপ্ত শোষণসূত্র (Absorption Theorem)</p><hr>
          <p><b>উপপাদ্য</b><br>A + (A . B) = A<br>A . (A + B) = A</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">সহায়ক উপপাদ্য (Secondary Theorem)</p>
          <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>উপপাদ্য</th>
                  <th>প্রমান</th>
                  </tr>
                  <tr>
                  <td><span style="text-decoration: double overline;">A</span> = A</td>
                  <td>পর পর দুবার পূরক করলে (অর্থাৎ A = 0 হলে, 0 কে 1 আবার 1 কে 0, অথবা A = 1 হলে, 1 কে 0 আবার 0 কে 1) করলে আগের মান চলে আসে।</td>
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