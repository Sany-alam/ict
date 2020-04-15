$(function() {
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // }); // csrf solution

    $("#html-input").blur(function() {
        data = $("#html-input").val();
        $("#html-output").html(data);
    })
})
