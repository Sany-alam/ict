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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>Login</title>
</head>
<body>

    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-4">
            <div class="card">
                <div class="card-body m-4" id="login">
                    <div class="form-group">
                        <label for="number">Input your number</label>
                        <input type="text" id="phone-number" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="form-group text-right">
                        <button class="newsfeed-buttons" id="login-submit">Submit</button>
                    </div>
                </div>
                <div class="card-body m-4" id="otp" style="display: none">
                    <div class="form-group">
                        <label for="number">Input OTP</label>
                        <input type="text" id="otp-number" class="form-control" placeholder="OTP">
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="#" onclick="resend_otp()"><small>Resend?</small></a><br>
                            <a href="#" onclick="to_login()"><small>Wrong phone number?</small></a>
                        </div>
                        <button class="newsfeed-buttons" id="otp-submit">Submit</button>
                    </div>
                </div>
                <div class="card-body m-4" id="register" style="display: none">
                    <div class="form-group">
                        <label for="fullname">Enter your full name</label>
                        <input type="text" id="fullname" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="institute">Enter your institute name</label>
                        <input type="text" id="institute" class="form-control" placeholder="Institute">
                    </div>
                    <div class="form-group text-right">
                        <button class="newsfeed-buttons" id="register-submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- vendor javascripts -->
<script src="{{ asset('assets/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/vendors/sweetalert/sweetalert.js') }}"></script>
<!-- all js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>

<!-- custom js -->

<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }); // csrf solution

        $("#register-submit").click(function () {
            if ($("#fullname").val().length != 0 && $("#institute").val().length != 0) {
                data = new FormData();
                data.append('name',$("#fullname").val());
                data.append('phone',$("#phone-number").val());
                data.append('institute',$("#institute").val());
                $.ajax({
                    processData:false,
                    contentType:false,
                    data:data,
                    type:"POST",
                    url:"{{route('register')}}",
                    success:function(data) {
                        a = $.trim(data);
                        if(a=="ok"){
                            location.href="{{url('/home')}}";
                        }else{
                            console.log(data);
                        }
                    }
                })
            }
        })
        $("#login-submit").click(function () {
            if ($("#phone-number").val().length == 0) {
                alert("Fillup input");
            }else{
                to_otp();
            }
        })
        $("#otp-submit").click(function () {
            if ($("#otp-number").val().length == 0) {
                alert("Fillup input");
            }else{
                data = new FormData();
                data.append('phone',$("#phone-number").val());
                data.append('otp',$("#otp-number").val());
                $.ajax({
                    processData:false,
                    contentType:false,
                    data:data,
                    type:"POST",
                    url:"{{route('login')}}",
                    success:function(data) {
                        a = $.trim(data);
                        if(a=="ok"){
                            location.href="{{url('/home')}}";
                        }else{
                            to_register();
                        }
                    }
                })
            }
        })
        $("nav.navbar").hide();
        $(".page-content").removeClass("page-content");
    });


    function to_login() {
        $("#otp").hide(function () {
            $("#login").show();
        })
    }

    function to_register() {
        $("#otp").hide(function () {
            $("#register").show();
        })
    }

    function to_otp() {
        $("#login").hide(function () {
            $("#otp").show();
        })
    }

    function resend_otp() {
        c = confirm($("#phone-number").val()+" your number?");
        if (c) {
            alert("done");
        }else{
            to_login()
        }
    }


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