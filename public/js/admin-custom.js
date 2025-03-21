$(document).ready(function () {
    $("#logout-btn").click(function () {
        $(this).closest("form").submit();
    });
});
