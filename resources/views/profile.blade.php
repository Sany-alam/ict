
@extends('app')
@section('title','ICT')
@section('profile-active','active')
@section('page-css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.css') }}">
    <style>
        @media (min-width: 576px)
        {
            .modal-dialog {
            margin: 10.75rem auto!important;
            }
        }
    </style>
@endsection
@section('content')
<!-- box title bar-->
<div class="">
    <div class="card">
        <div class="card-body">
            <div class="py-5">
                <div class="justify-content-center mb-2">
                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                        <img style="background:url('{{asset("assets/images/backgrounds/Deafult-Profile-Picture.png")}}');background-position: center;background-repeat: no-repeat;background-size: cover;" src="">
                    </div>
                </div>
                <div class="justify-content-center mb-4">
                    <h1 class="display-4">{{$user->name}}</h1>
                </div>
            </div>
            <hr>
            <ul class="nav justify-content-between">
                <li class="nav-item">
                  <a class="nav-link active" href="#"><h5>Total answer : 95</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>Correct answer : 55</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>Wrong answer : 40</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>Total post : 10</h5></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><h5>Total reply : 200</h5></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sticky-top card text-left m-0">
        <div class="card-body">
            <textarea id="write-post-text" class="form-control mb-2" placeholder="Text here ..."></textarea>
            <select class="select2 mb-2" id="write-post-tag">
                <option value="">Chose tags</option>
                <option value="a">a</option>
                <option value="b">b</option>
                <option value="c">c</option>
            </select>
            <button class="newsfeed-buttons form-control mb-2" id="add_post">Post</button>
        </div>
    </div>
    @for ($j = 0; $j < 2; $j++)
        <div class="text-left mt-3" id="all_post">
            <div class="post-section m-0">
                <div class="d-flex justify-content-between px-4 pt-3">
                    <div class="d-flex justify-content-center">
                        <div class="avatar avatar-image" style="width:50px;height:50px;">
                            <img style="background:url('{{asset("assets/images/backgrounds/Deafult-Profile-Picture.png")}}');background-position: center;background-repeat: no-repeat;background-size: cover;" src="" alt="">
                        </div>
                        <div class="pl-2">
                            <h4 class="m-0 p-0">{{$user->name}}</h4>
                            <small class="">9 pm</small>
                        </div>
                    </div>
                    <!-- solved dropdown problem -->
                    <div class="dropdown post-option-triple-dot">
                        <a href="javascript:void(0)" id="post-option-action-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="post-option-action-dropdown">
                            <a class="dropdown-item" href="#">Edit Post</a>
                            <a class="dropdown-item" href="#">Delete Post</a>
                        </div>
                    </div>
                </div>
    
                <div class="post-content px-3 pt-3">
                    <p>This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?</p>
                    <img class="img-fluid" src="{{asset("")}}" alt="">
                </div>
                <div class="post-write-comment">
                    <div class="postcomment-textarea">
                        <input placeholder="Your text hare" type="text" class="">
                        <ul class="postcomment-icons">
                            <li class="postcomment-icon">
                                <input type="file" id="attach">
                                <label for="attach">
                                    <i class="fa fa-paperclip"></i>
                                </label>
                            </li>
                            <li class="postcomment-icon">
                                <input type="file" id="image">
                                <label for="image">
                                    <i class="fa fa-image"></i>
                                </label>
                                </a>
                            </li>
                            <li class="postcomment-icon">
                                <a href="#">
                                    <i class="fa fa-smile"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <button class="newsfeed-buttons mt-2">Reply</button>
                    </div>
    
                    @for ($i = 0; $i < 1; $i++)
                    <div class="d-flex justify-content-between px-4 pt-3">
                        <div class="d-flex justify-content-center">
                            <div class="avatar avatar-image" style="width:50px;height:50px;">
                                <img style="background:url('{{asset("assets/images/backgrounds/Deafult-Profile-Picture.png")}}');background-position: center;background-repeat: no-repeat;background-size: cover;" src="{{asset('assets\images\backgrounds\Annotation 2019-12-18 194529.png')}}" alt="">
                            </div>
                            <div class="pl-2">
                                <h4 class="m-0 p-0">Sayeed</h4>
                                <small class="">10 pm</small>
                            </div>
                        </div>
                        <!-- solved dropdown problem -->
                        <div class="dropdown post-option-triple-dot">
                            <a href="javascript:void(0)" id="post-option-action-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="post-option-action-dropdown">
                                <a class="dropdown-item" href="#">Reply</a>
                                <a class="dropdown-item" href="#">Report</a>
                                <a class="dropdown-item" href="#">Review</a>
                            </div>
                        </div>
                    </div>
            
                    <div class="post-content px-3 pt-3">
                        <p>This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?</p>
                        <img class="img-fluid" src="{{asset("")}}" alt="">
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    @endfor
</div>

@endsection
@section('page-js')
    <script src="{{ asset('assets') }}\vendors\select2\select2.min.js"></script>
@endsection
@section('page-custom-js')
{{-- <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script> --}}
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script src="{{ asset('assets') }}/js/custom/newsfeed.js?{{ time() }}"></script>
<script>
//     var config = {
//         apiKey: "{{ config('services.firebase.api_key') }}",
//         authDomain: "{{ config('services.firebase.auth_domain') }}",
//         databaseURL: "{{ config('services.firebase.database_url') }}",
//         storageBucket: "{{ config('services.firebase.storage_bucket') }}",
//     };
//     firebase.initializeApp(config);

// var database = firebase.database();

// var lastIndex = 0;

// // Get Data
// firebase.database().ref('post/').on('value', function(snapshot) {
//     var value = snapshot.val();
//     var htmls = [];
//     var comments = [];

//     $.each(value, function(index, value) {



//             htmls.push(' <div class="post-section">\
//                 <div class="post-owner">\
//                     <div class="post-owner-pp">\
//                     <img src="'+value.user_image+'" alt="" class="img-fluid">\
//                     </div>\
//                     <div class="post-owner-name-time">\
//                     <a href="#"><p class="post-owner-name">'+value.user_name+'</p></a>\
//                     <small class="post-date-time">'+value.post_date+'</small>\
//                     </div>\
//                     <div class="dropdown post-option-triple-dot">\
//                     <a href="javascript:void(0)" id="post-option-action-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\
//                         <i class="fa fa-angle-down"></i>\
//                     </a>\
//                     <div class="dropdown-menu" aria-labelledby="post-option-action-dropdown">\
//                         <a class="dropdown-item" href="#">Edit Post</a>\
//                         <a class="dropdown-item" href="#">Delete Post</a>\
//                     </div>\
//                     </div>\
//                 </div>\
//                 <div class="post-content">\
//                     <p>'+value.post_text+'</p>\
//                     <img class="img-fluid" src="assets/images/icons/prev qstn.png" alt="">\
//                 </div>\
//                 <div class="post-write-comment">\
//                     <div class="postcomment-textarea">\
//                     <input placeholder="Your text hare" type="text" class="">\
//                     <ul class="postcomment-icons">\
//                         <li class="postcomment-icon">\
//                         <input type="file" id="attach">\
//                         <label for="attach">\
//                             <i class="fa fa-paperclip"></i>\
//                         </label>\
//                         </li>\
//                         <li class="postcomment-icon">\
//                         <input type="file" id="image">\
//                         <label for="image">\
//                             <i class="fa fa-image"></i>\
//                         </label>\
//                         </a>\
//                         </li>\
//                         <li class="postcomment-icon">\
//                         <a href="#">\
//                             <i class="fa fa-smile"></i>\
//                         </a>\
//                         </li>\
//                     </ul>\
//                     </div>\
//                     <div class="text-right">\
//                     <button class="newsfeed-buttons mt-2">Comment</button>\
//                     </div>\
//                 </div>\
//                 </div>');
//         lastIndex = index;
//     });
//     $('#all_post').html(htmls);
//     $("#submitUser").removeClass('desabled');
// });

// // Add Data
// $('#add_post').on('click', function() {
//     //var values = $("#addCustomer").serializeArray();
//     var post_date = "19-05-2020 6:16PM";
//     var post_tag ="xyz,abc";
//     var post_text = "This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?";
//     var user_id = "1";
//     var user_name = "abc";
//     var user_image = "assets/images/backgrounds/Annotation 2019-12-18 194529.png";
//     var post_id = lastIndex + 1;

//     //console.log(values);

//     firebase.database().ref('post/' + "post"+post_id).set({
//         post_date: post_date,
//         post_tag: post_tag,
//         post_text:post_text,
//         user_id:user_id,
//         user_name:user_name,
//         user_image:user_image
//     });

//     userID = 1;
//     // Reassign lastID value
//     lastIndex = userID;
//     $("#addCustomer input").val("");
// });

// // Update Data
// var updateID = 0;
// $('body').on('click', '.updateData', function() {
//     updateID = $(this).attr('data-id');
//     firebase.database().ref('customers/' + updateID).on('value', function(snapshot) {
//         var values = snapshot.val();
//         var updateData = '<div class="form-group">\
//             <label for="first_name" class="col-md-12 col-form-label">Name</label>\
//             <div class="col-md-12">\
//                 <input id="first_name" type="text" class="form-control" name="name" value="' + values.name + '" required autofocus>\
//             </div>\
//         </div>\
//         <div class="form-group">\
//             <label for="last_name" class="col-md-12 col-form-label">Email</label>\
//             <div class="col-md-12">\
//                 <input id="last_name" type="text" class="form-control" name="email" value="' + values.email + '" required autofocus>\
//             </div>\
//         </div>';

//         $('#updateBody').html(updateData);
//     });
// });

// $('.updateCustomer').on('click', function() {
//     var values = $(".users-update-record-model").serializeArray();
//     var postData = {
//         name: values[0].value,
//         email: values[1].value,
//     };

//     var updates = {};
//     updates['/customers/' + updateID] = postData;

//     firebase.database().ref().update(updates);

//     $("#update-modal").modal('hide');
// });

// // Remove Data
// $("body").on('click', '.removeData', function() {
//     var id = $(this).attr('data-id');
//     $('body').find('.users-remove-record-model').append('<input name="id" type="hidden" value="' + id + '">');
// });

// $('.deleteRecord').on('click', function() {
//     var values = $(".users-remove-record-model").serializeArray();
//     var id = values[0].value;
//     firebase.database().ref('customers/' + id).remove();
//     $('body').find('.users-remove-record-model').find("input").remove();
//     $("#remove-modal").modal('hide');
// });
// $('.remove-data-from-delete-form').click(function() {
//     $('body').find('.users-remove-record-model').find("input").remove();
// });
</script>

@endsection