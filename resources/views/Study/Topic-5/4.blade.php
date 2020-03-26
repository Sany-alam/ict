<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- required css files -->
    <!-- bootstrap css files -->
    <link rel="stylesheet" href="../../assets/css/app.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="../../assets/font-awesome/css/all.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- required javascripts -->
    <script src="../../assets/js/vendors.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>

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
            <a href="#">5.2.1 Topic - ডাটাটাইপ মডিফায়ার</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <div class="topic-parts">
                  <p class="question text-light-primary">ডাটাটাইপ মডিফায়ার ও এর প্রকারভেদ</p>
                  <p class="">সি ভাষায় float ছাড়া বাকি সব প্রাথমিক ডেটাটাইপ এর সাথে কিছু মডিফায়ার যোগ করে ডাটাটাইপ এর রেঞ্জ, মেমরিতে জায়গা বাড়ানো বা কমানো যায়। মডিফায়ার গুলো হলঃ</p>
                  <ol>
                      <li>short</li>
                      <li>long</li>
                      <li>signed</li>
                      <li>unsigned</li>
                  </ol>
              </div>
              <div class="topic-parts">
                  <p class=""># এখানে unsigned যদি int ডাটাটাইপ এর সাথে যোগ করা হয় তাহলে ঋনাত্বক সংখ্যা int ডাটাটাইপ থেকে বাদ যাবে। ভ্যালু রেঞ্জ হবে ০ থেকে ৬৫৫৩৫।</p>
                  <p class=""># আবার signed যদি int ডাটাটাইপ এর সাথে যোগ করা হয় তাহলে ধনাত্বক ও ঋনাত্বক সব সংখ্যাকেই এই টাইপ এর রাখা যাবে। শুধু int ব্যবহার করা আর signed int ব্যবহার করা মূলত একই কথা।</p>
                  <p class=""># আবার long যদি দুইবার int এর সাথে অর্থাৎ long long int লেখা হয় তাহলে এই ডাটাটাইপ এর পূর্ণসংখ্যার জন্য ৬৪ বিট জায়গা দখল করবে মেমরিতে। এই ডাটাটাইপ পূর্ণসংখ্যার জন্য সবচেয়ে বড় রেঞ্জ।</p>
              </div>
              <div class="topic-parts">
                  <p class="">এভাবে যেকোনো মডিফায়ার ডাটাটাইপ এর সাথে বিভিন্ন কাজে যোগ করা হয়।</p>
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