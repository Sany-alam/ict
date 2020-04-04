<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- required css files -->

    <!-- board question page css -->
    <link href="{{ asset('assets/vendors/select2/select2.css') }}" rel="stylesheet">
    <!-- bootstrap css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <title>@yield('title')</title>
</head>
<body>
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
      <div class="container">

        <!-- box contents -->
        <div class="page-content text-center">
            @yield('content')
        </div>
      </div>

    <!-- body section end -->

</body>
<!-- required javascripts -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<!-- page js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

{{-- board question page --}}
<script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>

{{-- custom page js --}}
<script src="{{ asset('assets\js\custom\board-question.js') }}"></script>
</html>
