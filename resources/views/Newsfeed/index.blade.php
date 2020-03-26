@extends('app')
@section('title','Newsfeet')
@section('content')
<!-- box title bar-->
<div class="page-title">
    <!-- back button -->
    <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
    <!-- box title -->
    <a href="#">Newsfeed</a>
</div>
<!-- box body -->
<div class="page-body">
<!-- my timeline button -->
    <div class="text-right">
    <button class="mytimelne-button">
        My Timeline
    </button>
    </div>
    <!-- write post form -->
    <div class="writepost-form">
    <h4 class="text-light-primary text-left pl-2">
        Write Post
    </h4>
    <div class="writepost-textarea">
        <input placeholder="Your text hare" type="text" class="form-control">
        <ul class="writepost-icons">
        <li class="writepost-icon">
            <input type="file" id="attach">
            <label for="attach">
            <i class="fa fa-paperclip"></i>
            </label>
        </li>
        <li class="writepost-icon">
            <input type="file" id="image">
            <label for="image">
            <i class="fa fa-image"></i>
            </label>
            </a>
        </li>
        <li class="writepost-icon">
            <a href="#">
            <i class="fa fa-smile"></i>
            </a>
        </li>
        </ul>
    </div>
    <div class="text-right">
        <button class="newsfeed-buttons">Post</button>
    </div>
    </div>
    <!-- posts section -->
    <div class="post-section">
    <div class="post-owner">
        <div class="post-owner-pp">
        <img src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="" class="img-fluid">
        </div>
        <div class="post-owner-name-time">
        <a href="#"><p class="post-owner-name">Sany</p></a>
        <small class="post-date-time">9 pm</small>
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
    <div class="post-content">
        <p>This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?</p>
        <img class="img-fluid" src="assets/images/icons/prev qstn.png" alt="">
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
        <button class="newsfeed-buttons mt-2">Comment</button>
        </div>
    </div>
    <div class="post-comments">
        <div class="comment-owner">
        <div class="comment-owner-pp">
            <img src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="" class="img-fluid">
        </div>
        <div class="comment-owner-name-time">
            <a href="#"><p class="comment-owner-name">Sany</p></a>
            <small class="comment-date-time">9 pm</small>
        </div>
        </div>
        <div class="comment-content">
        <img class="img-fluid" src="assets/images/icons/prev qstn.png" alt="">
        <p>This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?</p>
        </div>
        <div class="comment-action">
        <div class="comment-ratings-stars">
            <p>Rate :</p>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
        </div>
        <button class="comment-report-button">Report</button>
        </div>
    </div>
    </div>
    <!-- 2nd posts section -->
    <div class="post-section">
    <div class="post-owner">
        <div class="post-owner-pp">
        <img src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="" class="img-fluid">
        </div>
        <div class="post-owner-name-time">
        <a href="#"><p class="post-owner-name">Sany</p></a>
        <small class="post-date-time">9 pm</small>
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
    <div class="post-content">
        <p>This is question about ICT? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed id tenetur nulla sit dolore accusantium fuga provident nostrum ratione. Porro reiciendis numquam id nihil doloremque corporis culpa tempora ipsam cumque?</p>
        <!-- without image post (img tag removed) -->
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
        <button class="newsfeed-buttons mt-2">Comment</button>
        </div>
    </div>
    <div class="post-comments">
        <div class="comment-owner">
        <div class="comment-owner-pp">
            <img src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="" class="img-fluid">
        </div>
        <div class="comment-owner-name-time">
            <a href="#"><p class="comment-owner-name">Sany</p></a>
            <small class="comment-date-time">9 pm</small>
        </div>
        </div>
        <div class="comment-content">
        <img class="img-fluid" src="assets/images/icons/prev qstn.png" alt="">
        <!-- without text comment (p tag removed) -->
        </div>
        <div class="comment-action">
        <div class="comment-ratings-stars two-star">
            <p>2.0 :</p>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
        </div>
        <button class="comment-report-button">Report</button>
        </div>
    </div>
    </div>
    <!-- 3rd posts section -->
    <div class="post-section">
    <div class="post-owner">
        <div class="post-owner-pp">
        <img src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="" class="img-fluid">
        </div>
        <div class="post-owner-name-time">
        <a href="#"><p class="post-owner-name">Sany</p></a>
        <small class="post-date-time">9 pm</small>
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
    <div class="post-content">
        <img class="img-fluid" src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="">
        <!-- without text post (img tag removed) -->
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
        <button class="newsfeed-buttons mt-2">Comment</button>
        </div>
    </div>
    <div class="post-comments">
        <div class="comment-owner">
        <div class="comment-owner-pp">
            <img class="img-fluid" src="assets/images/backgrounds/Annotation 2019-12-18 194529.png" alt="">
        </div>
        <div class="comment-owner-name-time">
            <a href="#"><p class="comment-owner-name">Sany</p></a>
            <small class="comment-date-time">9 pm</small>
        </div>
        </div>
        <div class="comment-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum commodi deserunt culpa pariatur quaerat saepe accusantium nobis veniam, mollitia quasi illo, aperiam alias voluptatibus. At natus quas dolorum corporis officiis?</p>
        <!-- without image comment (p tag removed) -->
        </div>
        <div class="comment-action">
        <div class="comment-ratings-stars five-star">
            <p>5.0 :</p>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
            <i class="star fa fa-star"></i>
        </div>
        <button class="comment-report-button">Report</button>
        </div>
    </div>
    </div>
</div>
          
@endsection