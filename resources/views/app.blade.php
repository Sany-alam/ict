<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- required css files -->
    @yield('page-css')
    <!-- bootstrap css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.min.css') }}">
    <!-- ict css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- custom css --}}
    @yield('page-custom-css')

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
<!-- vendor javascripts -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/vendors/sweetalert/sweetalert.js') }}"></script>

{{-- page js --}}
@yield('page-js')

<!-- all js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<!-- custom js -->
@yield('page-custom-js')
<script>
    $(document).ajaxStart(function() {
        swal({
            //  title: "Loading...",
            //  text: "Please wait",
            icon: "{{asset('assets/images/icons/loading-gif-png-5.gif')}}",
            button: false,
            closeOnClickOutside: false,
            closeOnEsc: false,
        });
        $(".swal-modal").css('background-color', 'rgba(0,0,0,0.0)');
        $(".swal-overlay").css('background-color', 'rgba(0,0,0,0.8)');
        $('.swal-icon').css({
            "height":"180px",
        });
    });
    $(document).ajaxStop(function() {
        swal.close();
    });
</script>
</html>
