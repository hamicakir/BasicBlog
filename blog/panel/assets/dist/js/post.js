$(document).ready(function () {
    $("#post_type").change(function () {
        var post_type = $(this).val();
        if(post_type == 1){

            $(".image-container").removeClass("hidden");
            $(".video-container").addClass("hidden");

        }else if(post_type == 2){
            $(".image-container").addClass("hidden");
            $(".video-container").removeClass("hidden");
        }
    })
});