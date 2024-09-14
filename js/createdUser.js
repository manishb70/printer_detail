$(function () {
    $("#user_view").click(function () {
        if ($(this).is(":checked")) {
            $("#view_date").show();
        } else {
            $("#view_date").hide();
        }
    });
});