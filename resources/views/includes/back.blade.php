{{-- <a title="Back to 'some where'" class="page-back-arrow" href="{{route('back')}}"><i class="fa fa-arrow-left"></i></a> --}}
<a title="Back to 'some where'" class="page-back-arrow" href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i></a>
    