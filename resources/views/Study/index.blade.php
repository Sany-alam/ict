@extends('app')
@section('title','Study')
@section('content')


 <!-- box title bar-->
 <div class="page-title">
            <!-- back button -->
            {{-- <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a> --}}
            @include('includes.back')
            <!-- box title -->
            <a href="#">Study</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <!-- chapter buttons -->
            <div class="chapter-buttons">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link chapter-button active" id="chapter-1-tab" data-toggle="tab" href="#chapter-1" role="tab" aria-controls="chapter-1" aria-selected="true">সংখ্যা পদ্ধতি</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-2-tab" data-toggle="tab" href="#chapter-2" role="tab" aria-controls="chapter-2" aria-selected="false">বুলিয়ান অ্যালজেবরা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-3-tab" data-toggle="tab" href="#chapter-3" role="tab" aria-controls="chapter-3" aria-selected="false">লজিক গেইট</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-4-tab" data-toggle="tab" href="#chapter-4" role="tab" aria-controls="chapter-4" aria-selected="false">এইচটিএমএল</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-5-tab" data-toggle="tab" href="#chapter-5" role="tab" aria-controls="chapter-5" aria-selected="false">সি প্রোগ্রামিং ভাষা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-6-tab" data-toggle="tab" href="#chapter-6" role="tab" aria-controls="chapter-6" aria-selected="false">SQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-7-tab" data-toggle="tab" href="#chapter-7" role="tab" aria-controls="chapter-7" aria-selected="false">এনক্রিপশন</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content m-t-15" id="myTabContent">
                <div class="tab-pane fade show active" id="chapter-1" role="tabpanel" aria-labelledby="chapter-1-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-1/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">১. </span>
                                <span class="topic-name">সংখ্যা পদ্ধতি</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.১ </span>
                                <span class="topic-name">বিভিন্ন ধরণের সংখ্যা পদ্ধতি</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.২ </span>
                                <span class="topic-name">সংখ্যা পদ্ধতির রূপান্তর</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.২.১ </span>
                                <span class="topic-name">দশমিক থেকে সব</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.২.২ </span>
                                <span class="topic-name">সব থেকে দশমিক</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.২.৩ </span>
                                <span class="topic-name">বাইনারি, অক্টাল হেক্সা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৩ </span>
                                <span class="topic-name">বাইনারি গণিত</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৩.১ </span>
                                <span class="topic-name">বাইনারি যোগ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৩.২ </span>
                                <span class="topic-name">বাইনারি বিয়োগ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-10') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৪ </span>
                                <span class="topic-name">চিহ্ন যুক্ত সংখ্যা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-11') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৪.১ </span>
                                <span class="topic-name">এক-এর পরিপূরক</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-12') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৪.২ </span>
                                <span class="topic-name">দুই-এর পরিপূরক</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-13') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৪.২.১ </span>
                                <span class="topic-name">দুই-এর পরিপূরকে যোগ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-1/Topic-14') }}">
                            <li class="topics-li">
                                <span class="topics-no">১.৪.২.২ </span>
                                <span class="topic-name">দুই-এর পরিপূরকে বিয়োগ</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-2" role="tabpanel" aria-labelledby="chapter-2-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-2/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">#</span>
                                <span class="topic-name">বিট নিয়ে সবকিছু</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">২. </span>
                                <span class="topic-name">বুলিয়ান অ্যালজেবরা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.১ </span>
                                <span class="topic-name">বুলিয়ান উপপাদ্য সমূহ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.২.১ </span>
                                <span class="topic-name">লজিক ফাংশন সরলীকরণ ১</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.২.২ </span>
                                <span class="topic-name">লজিক ফাংশন সরলীকরণ ২</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.২.৩ </span>
                                <span class="topic-name">লজিক ফাংশন সরলীকরণ ৩</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.২.৪ </span>
                                <span class="topic-name">লজিক ফাংশন সরলীকরণ ৪</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-2/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">২.২.৫ </span>
                                <span class="topic-name">লজিক ফাংশন সরলীকরণ ৫</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-3" role="tabpanel" aria-labelledby="chapter-3-tab">
                    <ul class="topics-ul">
                    <a href="{{ url('Study/Chapter-3/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩. </span>
                                <span class="topic-name">লজিক গেইট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.১ </span>
                                <span class="topic-name">মৌলিক লজিক গেইট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.২ </span>
                                <span class="topic-name">সার্বজনীন গেইট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৩ </span>
                                <span class="topic-name">বিশেষ গেইট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৪ </span>
                                <span class="topic-name">সার্বজনীন গেইট ব্যবহার করে মৌলিক গেইট তৈরী</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৪.১ </span>
                                <span class="topic-name">NOR গেইট ব্যবহার করে মৌলিক গেইট নির্ণয়</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৪.২ </span>
                                <span class="topic-name">NAND গেইট ব্যবহার করে মৌলিক গেইট নির্ণয়</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৫ </span>
                                <span class="topic-name">সার্বজনীন গেইট ব্যবহার করে বিশেষ গেইট তৈরী </span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৫.১ </span>
                                <span class="topic-name">NOR গেইট ব্যবহার করে বিশেষ গেইট তৈরী</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-3/Topic-10') }}">
                            <li class="topics-li">
                                <span class="topics-no">৩.৫.২ </span>
                                <span class="topic-name">NAND গেইট ব্যবহার করে বিশেষ গেইট তৈরী</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-4" role="tabpanel" aria-labelledby="chapter-4-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-4/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.১ </span>
                                <span class="topic-name">প্রাথমিক আলোচনা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.২</span>
                                <span class="topic-name">ট্যাগ এবং এলিমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৩ </span>
                                <span class="topic-name"> HTML ফাইল তৈরি</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৪ </span>
                                <span class="topic-name"> HTML ফাইলের বিভিন্ন অংশ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৫ </span>
                                <span class="topic-name"> &lt;head&gt; এর ট্যাগ সমূহ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৬ </span>
                                <span class="topic-name">&lt;body&gt; এর ট্যাগ সমূহ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৭ </span>
                                <span class="topic-name">তালিকা তৈরি করা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৮ </span>
                                <span class="topic-name">ছবি যুক্ত করা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.৯ </span>
                                <span class="topic-name">টেবিল তৈরি করা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-10') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.১০ </span>
                                <span class="topic-name">হাইপারলিঙ্ক তৈরি করা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-4/Topic-11') }}">
                            <li class="topics-li">
                                <span class="topics-no">৪.১১ </span>
                                <span class="topic-name">মন্তব্য লিখা</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-5" role="tabpanel" aria-labelledby="chapter-5-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.</span>
                                <span class="topic-name">সি ভাষা ও এর জনক</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.১</span>
                                <span class="topic-name">সূচনা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.২</span>
                                <span class="topic-name">ডাটাটাইপ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.২.১</span>
                                <span class="topic-name">ডাটাটাইপ মডিফায়ার</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.৩</span>
                                <span class="topic-name">ভ্যারিয়েবল</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.৪</span>
                                <span class="topic-name">ইনপুট এবং আউটপুট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.৫</span>
                                <span class="topic-name">অপারেটর</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.৬</span>
                                <span class="topic-name">কন্ডিশনাল স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">৫.৬.১</span>
                                <span class="topic-name">if স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}0">
                            <li class="topics-li">
                                <span class="topics-no">৫.৬.২</span>
                                <span class="topic-name">if...else স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}1">
                            <li class="topics-li">
                                <span class="topics-no">৫.৬.৩</span>
                                <span class="topic-name">else...if স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}2">
                            <li class="topics-li">
                                <span class="topics-no">৫.৬.৪</span>
                                <span class="topic-name">switch স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}3">
                            <li class="topics-li">
                                <span class="topics-no">৫.৭</span>
                                <span class="topic-name">লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}4">
                            <li class="topics-li">
                                <span class="topics-no">৫.৭.১</span>
                                <span class="topic-name">for লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}5">
                            <li class="topics-li">
                                <span class="topics-no">৫.৭.২</span>
                                <span class="topic-name">while লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}6">
                            <li class="topics-li">
                                <span class="topics-no">৫.৭.৩</span>
                                <span class="topic-name">do while লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}7">
                            <li class="topics-li">
                                <span class="topics-no">৫.৮</span>
                                <span class="topic-name">অ্যারে!</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-6" role="tabpanel" aria-labelledby="chapter-6-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-6/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬. </span>
                                <span class="topic-name">SQL</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.১ </span>
                                <span class="topic-name">CREATE স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.২ </span>
                                <span class="topic-name">INSERT স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৩ </span>
                                <span class="topic-name">SELECT স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৪ </span>
                                <span class="topic-name">WHERE কী-ওয়ার্ড</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৫ </span>
                                <span class="topic-name"> AND & OR অপারেটর</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৬  </span>
                                <span class="topic-name">ORDER BY কী-ওয়ার্ড</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৭  </span>
                                <span class="topic-name">UPDATE স্টেটমেন্ট </span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৮ </span>
                                <span class="topic-name">DELETE স্টেটমেন্ট </span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-10') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.৯  </span>
                                <span class="topic-name">ALTER কী-ওয়ার্ড</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-6/Topic-11') }}">
                            <li class="topics-li">
                                <span class="topics-no">৬.১০ </span>
                                <span class="topic-name">DROP কী-ওয়ার্ড </span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="chapter-7" role="tabpanel" aria-labelledby="chapter-7s-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-7/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">৭. </span>
                                <span class="topic-name">এনক্রিপশন</span>
                            </li>
                        </a>
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('practice1') }}" class="btn btn-sm btn-primary px-4 my-4">Practice</a>
                    </div>
                </div>
            </div>
          </div>


@endsection