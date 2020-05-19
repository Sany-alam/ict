$(function() {
    $('.select2').select2(); // keyword selector
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
}); // csrf solution
