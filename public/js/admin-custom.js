$(document).ready(function () {
    $("#logout-btn").click(function () {
        $(this).closest("form").submit();
    });

    const date = new Date();
    const year = date.getFullYear();
    $(".dynamic-year").html(year);
});
