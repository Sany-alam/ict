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
            <a href="#">২. বুলিয়ান অ্যালজেবরা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
          <div class="topic-parts">
          <p class="question text-light-primary">বুলিয়ান অ্যালজেবরা</p><hr>
          <p>ইংরেজ গণিতজ্ঞ জর্জ বুলি (George Boole) সর্বপ্রথম বুলিয়ান অ্যালজেবরা নিয়ে আলোচনা করেন। এটি মূলত সত্য (১) এবং মিথ্যা (০) নিয়ে তৈরি অ্যালজেবরা। যেহেতু কম্পিউটার বাইনারি সংখ্যা নিয়ে কাজ করে, যেখানে রয়েছে শুধু দুটি রুপ ০ এবং ১, তাই কম্পিউটার বিজ্ঞানে সমস্ত গানিতিক এবং যুক্তিমূলক কাজে এ বুলিয়ান অ্যালজেবরা ব্যবহার করা হয়।</p>
          </div>
          <div class="topic-parts-imp">
          <p class="question text-light-primary">বুলিয়ান চলক (boolean variable)</p><hr>
          <p>যার মান পরিবর্তন হয় তাকে চলক (variable) বলে। যেসব চলকের মান শুধু 0 অথবা 1 হতে পারে তাদের বুলিয়ান চলক বলে। যেমনঃ A যদি একটি বুলিয়ান চলক হয় তাহলে এর মান হতে পারে 0 অথবা 1।</p>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">বুলিয়ান অপারেশন</p><hr>
          <p>বুলিয়ান অ্যালজেবরায় ৩ ধরনের কাজ করা হয়ে থাকেঃ</p>
          <ol>
          <li>OR (যৌক্তিক যোগ)</li>
          <li>AND (যৌক্তিক গুন)</li>
          <li>NOT (বুলিয়ান পূরক/Boolean Complement/Negation)</li>
          </ol>
          </div> 

          <div class="topic-parts">
          <p class="question text-light-primary">OR (যৌক্তিক যোগ)</p><hr>
          <p>যৌক্তিক যোগে যে কোনো একটি ইনপুট (operand) সত্য (1) হলে ফলাফল সত্য (1)।<br>OR বুঝাতে "+" চিহ্ন ব্যবহার করা হয়।</p>
          <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>A</th>
                  <th>B</th>
                  <th>A + B</th>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>0</td>
                  <td>1</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  </table>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">AND (যৌক্তিক গুন)</p><hr>
          <p>যৌক্তিক গুনে সব গুলো ইনপুট (operand) সত্য (1) হলে ফলাফল সত্য (1)। অন্য সব ক্ষেত্রে ফলাফল মিথ্যা (0)। এটি হুবহু সাধারন গুনের মতই।<br>AND বুঝাতে "." ব্যবহার করা হয়।</p>
          <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>A</th>
                  <th>B</th>
                  <th>A . B</th>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>1</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>0</td>
                  <td>0</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  </tr>
                  </table>
          </div>
          <div class="topic-parts">
          <p class="question text-light-primary">NOT (বুলিয়ান পূরক/Boolean Complement/Negation)</p><hr>
          <p>বুলিয়ান পূরক বা NOT এর কাজ হল বিপরিত মান আউটপুট দেয়া। অর্থাৎ ইনপুট 1 হলে আউটপুট 0, ইনপুট 0 হলে আউটপুট 1। এর ইনপুট শুধুমাত্র একটি হতে পারে।</p>
          <p>NOT বুঝাতে চলকের পাশে prime (" ' ") অথবা চলকের উপরে bar (" ¯ ") দেয়া হয়। আমরা আমাদের নির্দেশিকার সব যায়গায় bar ব্যবহার করেছি।</p>
          <table class="col-md-6 col-sm-12">
                  <tr>
                  <th>A</th>
                  <th><span>A</span></th>
                  </tr>
                  <tr>
                  <td>0</td>
                  <td>1</td>
                  </tr>
                  <tr>
                  <td>1</td>
                  <td>0</td>
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