$(function() {
    $("#compiler-output-toggle").click(function() {
        $("button#compiler-output-toggle>i").toggleClass('fa-angle-up');
        $("#compiler-output").slideToggle();
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); // csrf solution


    // search board question


    $("#run_code").click(function() {
        var code = document.getElementById("code").value.trim();
        var formdata = new FormData();
        formdata.append('code', code);
        $.ajax({
            processData: false,
            contentType: false,
            data: formdata,

            url: "c_complier",
            type: "POST",
            success: function(data) {
                alert(data);
                //console.log(data);
            }
        });
    });

});
