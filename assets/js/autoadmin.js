
$(document).ready(function () {

    get_about();
});

function get_about() {
    var url = 'get_about';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            $("#about_us").val(o.about_us);
            $("#mission").val(o.mission);
            $("#vision").val(o.vision);
        });
    });
}


$("#btn_about").on("click", function (e) {
    e.preventDefault();
    console.log("hola!");

    var about_us = $("#about_us").val();
    var mission = $("#mission").val();
    var vision = $("#vision").val();

    console.log(about_us);
    console.log(mission);
    console.log(vision);

    $.ajax({
        url: 'save_about',
        type: 'post',
        dataType: 'json',
        data: { about_us, mission, vision },
        success: function (o) {
            if (o.msg == "1") {
                alert("updated success")
            } else {
                alert("updated failed");
            }
        },
        error: function () {
            alert("system error");
        }
    });
});
