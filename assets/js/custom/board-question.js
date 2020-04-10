$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); // csrf solution
    $('.select2').select2(); // board and year selector

    // search board question
    $("#search-board-question").click(function() {
        if ($("#boardList").val().length !== 0) {
            $.ajax({
                processData:false,
                contentType:false,
                type:"get",
                url:"SearchBoardQuestion/"+$("#boardList").val()+"",
                success:function(data) {
                    trimmed = $.trim(data);
                    if (trimmed.length > 0) {
                        $("#board-mcq-no-data").hide();
                        $("#board-mcq").html(data);
                        $("#board-mcq").show();
                        // console.log(data);
                    }
                    else{
                        console.log(data);
                        $("#board-mcq").hide();
                        $("#board-mcq-no-data").text("No question available");
                        $("#board-mcq-no-data").show();
                    }
                }
            });
        }
    });

    // $("#board-question-form-submit").click(function() {
    //     formdata = new FormData();
    //     formdata.append('answer',$("#board-question-form"));
    //     $.ajax({
    //         processData:false,
    //         contentType:false,
    //         data:formdata,
    //         dataType:"json",
    //         url:"question_submit",
    //         type:"POST",
    //         success:function(data){
    //             // alert(data);
    //             console.log(data);
    //         }
    //     });
    // });

});
