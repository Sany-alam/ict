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
            <a href="#">৪.৭ তালিকা তৈরি করা</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              
          <div class="topic-parts-imp">
              <p class="question text-light-primary">তালিকা</p><hr>
              <p>প্রায় সময় লিখার ক্ষেত্রে আমাদের তালিকা (List) তৈরির প্রয়োজন পরে। এখন আমরা শিখব কিভাবে লিস্ট আকারে আমরা কোন কিছু লিখতে পারি। লিস্ট দু-প্রকারের হতে পারে। যেমনঃ</p>
              <ol>
              <li>সাজানো তালিকা (Orderded List): যে তালিকায় ১, ২, ৩ এরকম নাম্বার দেওয়া থাকে তাদের ordered list বলে।</li>
              <li>অসাজানো তালিকা (Un-ordered List): যে তালিকায় কোনো নাম্বার দেওয়া হয়না।</li>
              </ol>
              <p>নিচে বিস্তারিত আলোচনা করা হল এগুলো নিয়ে।</p>
            </div>
            
            <div class="topic-parts">
              <p class="question text-light-primary">অর্ডার্ড লিস্ট (Ordered list)</p><hr>
              <p>এক্ষেত্রে আমরা &lt;ol&gt; ট্যাগ দিয়ে শুরু করব এবং লিস্ট এর প্রতিটি আইটেমকে &lt;li&gt; ট্যাগ এর মধ্যে রাখব। যেমনঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;ol&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;<br> 
                &nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;<br>
                &lt;/ol&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <ol>
              <li>Coffee </li>
              <li>Tea </li>
              <li>Milk </li>
              </ol>
            </div>
            <div class="topic-parts">
              <p>আবার যদি তুমি উপরের কোডটি এইভাবে দাওঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;ol type="A"&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;<br> 
                &nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;<br>
                &lt;/ol&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <ol type="A">
              <li>Coffee </li>
              <li>Tea </li>
              <li>Milk </li>
              </ol>
            </div>
            <div class="topic-parts">
              <p>তাহলে দেখা যাচ্ছে এখন লিস্টগুলো A, B, C, আকারে আসছে। অতএব লিস্ট এর নাম্বারিং কিভাবে হবে, তা চাইলে আমরা পরিবর্তনও করতে পারি।</p>
              <p>এখন তুমি উপরের এডিটরে <b>type="A"</b> এর পরিবর্তে নিচের মত করে লিখ এবং দেখ কি হয়ঃ</p>
              <ul>
                  <li>type="1"</li>
                  <li>type="A"</li>
                  <li>type="a"</li>
                  <li>type="I"</li>
                  <li>type="i"</li>
                </ul>
            </div>

            <div class="topic-parts">
              <p class="question text-light-primary">আন-অর্ডারড লিস্ট (un-ordered list)</p><hr>
              <p>এক্ষেত্রে আমরা &lt;ul&gt; ট্যাগ দিয়ে শুরু করব এবং লিস্ট এর প্রতিটি আইটেমকে &lt;li&gt; ট্যাগ এর মধ্যে রাখব। যেমনঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;ul&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;<br> 
                &nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;<br>
                &lt;/ul&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <ul>
              <li>Coffee </li>
              <li>Tea </li>
              <li>Milk </li>
              </ul>
            </div>
            <div class="topic-parts">
              <p>আবার যদি তুমি উপরের কোডটি এইভাবে দাওঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;ul style="list-style-type:circle" &gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Coffee&lt;/li&gt;<br> 
                &nbsp;&nbsp;&lt;li&gt;Tea&lt;/li&gt;<br>
                &nbsp;&nbsp;&lt;li&gt;Milk&lt;/li&gt;<br>
                &lt;/ul&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
              <ul style="list-style-type:circle" >
              <li>Coffee </li>
              <li>Tea </li>
              <li>Milk </li>
              </ul>
            </div>
            <div class="topic-parts">
              <p>তবে দেখা যাচ্ছে, বুলেট চিহ্ন (গোল ডট আকারের চিহ্নটাকেই বুলেট বলে) এর পরিবর্তে, সার্কেল চিহ্ন হিসেবে লিস্ট গুলো দেখানো হচ্ছে।</p>
              <p>এখানে <b>style="list-style-type: ..."</b> দিয়ে আসলে, লিস্ট গুলো কিভাবে সাজানো থাকবে তা ঠিক করে দেওয়া যায়।<br>আমরা <b>"circle"</b> এর বদলে নিচের যে-কোন একটি সিলেক্ট করে দিতে পারিঃ</p>
              <ul>
                  <li>disc</li>
                  <li>circle</li>
                  <li>square</li>
                  <li>square</li>
                  <li>none</li>
                </ul>
            </div>
            
            <div class="topic-parts">
              <p class="question text-light-primary">বর্ণনাযুক্ত তালিকা (description list)</p><hr>
              <p>এছাড়াও, ডেস্ক্রিপশন লিস্ট (description list) নামে আর এক প্রকারের লিস্ট ও তৈরী করা যায়।</p>
              <p>এক্ষেত্রে আমরা &lt;dl&gt; ট্যাগ দিয়ে শুরু করব এবং লিস্ট এর প্রতিটি আইটেমকে &lt;dt&gt; ট্যাগ এর মধ্যে রাখব। এবং &lt;dd&gt; ট্যাগ ব্যবহার করে ঐ নামের বর্ণনা করব। নিচে একটি উদাহরণ দেওয়া হলঃ</p>
            </div>
            <div class="topic-parts-code">
                <h1>&lt;dl&gt;<br>
                &nbsp;&nbsp;&lt;dt&gt;Coffee&lt;/dt&gt;<br> 
                &nbsp;&nbsp;&lt;dd&gt;- black hot drink&lt;/dd&gt;<br>
                &nbsp;&nbsp;&lt;dt&gt;Milk&lt;/dt&gt;<br>
                &nbsp;&nbsp;&lt;dd&gt;- white cold drink&lt;/dd&gt;<br>
                &lt;/dl&gt;</h1>
            </div>
            <div class="topic-parts-code-ans">
            <dl>
                <dt>Coffee</dt>
                <dd>- black hot drink</dd>
                <dt>Milk</dt>
                <dd>- white cold drink</dd>
            </dl>
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