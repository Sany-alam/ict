@extends('app')
@section('title','Study')
@section('content')


 <!-- box title bar-->
 <div class="page-title">
            <!-- back button -->
            <a title="Back to 'some where'" class="page-back-arrow" href="#"><i class="fa fa-arrow-left"></i></a>
            <!-- box title -->
            <a href="#">Study</a>
          </div>
          <!-- box body -->
          <div class="page-body">
              <!-- chapter buttons -->
            <div class="chapter-buttons">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link chapter-button active" id="chapter-1-tab" data-toggle="tab" href="#chapter-1" role="tab" aria-controls="chapter-1" aria-selected="true">Chapter-1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-2-tab" data-toggle="tab" href="#chapter-2" role="tab" aria-controls="chapter-2" aria-selected="false">Chapter-2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-3-tab" data-toggle="tab" href="#chapter-3" role="tab" aria-controls="chapter-3" aria-selected="false">Chapter-3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-4-tab" data-toggle="tab" href="#chapter-4" role="tab" aria-controls="chapter-4" aria-selected="false">Chapter-4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-5-tab" data-toggle="tab" href="#chapter-5" role="tab" aria-controls="chapter-5" aria-selected="false">Chapter-5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link chapter-button" id="chapter-6-tab" data-toggle="tab" href="#chapter-6" role="tab" aria-controls="chapter-6" aria-selected="false">Chapter-6</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content m-t-15" id="myTabContent">
                <div class="tab-pane fade show active" id="chapter-1" role="tabpanel" aria-labelledby="chapter-1-tab">
                    <ul class="topics-ul">
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">1.1</span>
                                <span class="topic-name">Topic 1</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">1.2</span>
                                <span class="topic-name">Topic 2</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">1.3</span>
                                <span class="topic-name">Topic 3</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">1.4</span>
                                <span class="topic-name">Topic 4</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">1.5</span>
                                <span class="topic-name">Topic 5</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="chapter-2" role="tabpanel" aria-labelledby="chapter-2-tab">
                    <ul class="topics-ul">
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">2.1</span>
                                <span class="topic-name">Topic 1</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">2.2</span>
                                <span class="topic-name">Topic 2</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">2.3</span>
                                <span class="topic-name">Topic 3</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">2.4</span>
                                <span class="topic-name">Topic 4</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">2.5</span>
                                <span class="topic-name">Topic 5</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="chapter-3" role="tabpanel" aria-labelledby="chapter-3-tab">
                    <ul class="topics-ul">
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">3.1</span>
                                <span class="topic-name">Topic 1</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">3.2</span>
                                <span class="topic-name">Topic 2</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">3.3</span>
                                <span class="topic-name">Topic 3</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">3.4</span>
                                <span class="topic-name">Topic 4</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">3.5</span>
                                <span class="topic-name">Topic 5</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="chapter-4" role="tabpanel" aria-labelledby="chapter-4-tab">
                    <ul class="topics-ul">
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">4.1</span>
                                <span class="topic-name">Topic 1</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">4.2</span>
                                <span class="topic-name">Topic 2</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">4.3</span>
                                <span class="topic-name">Topic 3</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">4.4</span>
                                <span class="topic-name">Topic 4</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">4.5</span>
                                <span class="topic-name">Topic 5</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="chapter-5" role="tabpanel" aria-labelledby="chapter-5-tab">
                    <ul class="topics-ul">
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.0</span>
                                <span class="topic-name">সি ভাষা ও এর জনক</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-2') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.1</span>
                                <span class="topic-name">সূচনা</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-3') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.2</span>
                                <span class="topic-name">ডাটাটাইপ</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-4') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.2.1</span>
                                <span class="topic-name">ডাটাটাইপ মডিফায়ার</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-5') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.3</span>
                                <span class="topic-name">ভ্যারিয়েবল</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-6') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.4</span>
                                <span class="topic-name">ইনপুট এবং আউটপুট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-7') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.5</span>
                                <span class="topic-name">অপারেটর</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-8') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.6</span>
                                <span class="topic-name">কন্ডিশনাল স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-9') }}">
                            <li class="topics-li">
                                <span class="topics-no">5.6.1</span>
                                <span class="topic-name">if স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}0">
                            <li class="topics-li">
                                <span class="topics-no">5.6.2</span>
                                <span class="topic-name">if...else স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}1">
                            <li class="topics-li">
                                <span class="topics-no">5.6.3</span>
                                <span class="topic-name">else...if স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}2">
                            <li class="topics-li">
                                <span class="topics-no">5.6.4</span>
                                <span class="topic-name">switch স্টেটমেন্ট</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}3">
                            <li class="topics-li">
                                <span class="topics-no">5.7</span>
                                <span class="topic-name">লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}4">
                            <li class="topics-li">
                                <span class="topics-no">5.7.1</span>
                                <span class="topic-name">for লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}5">
                            <li class="topics-li">
                                <span class="topics-no">5.7.2</span>
                                <span class="topic-name">while লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}6">
                            <li class="topics-li">
                                <span class="topics-no">5.7.3</span>
                                <span class="topic-name">do while লুপ!</span>
                            </li>
                        </a>
                        <a href="{{ url('Study/Chapter-5/Topic-1') }}7">
                            <li class="topics-li">
                                <span class="topics-no">5.8</span>
                                <span class="topic-name">অ্যারে!</span>
                            </li>
                        </a>
                    </ul>
                </div>
                <div class="tab-pane fade" id="chapter-6" role="tabpanel" aria-labelledby="chapter-6-tab">
                    <ul class="topics-ul">
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">6.1</span>
                                <span class="topic-name">Topic 1</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">6.2</span>
                                <span class="topic-name">Topic 2</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">6.3</span>
                                <span class="topic-name">Topic 3</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">6.4</span>
                                <span class="topic-name">Topic 4</span>
                            </li>
                        </a>
                        <a href="Topic.html">
                            <li class="topics-li">
                                <span class="topics-no">6.5</span>
                                <span class="topic-name">Topic 5</span>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
          </div>


@endsection