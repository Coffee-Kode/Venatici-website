$(document).ready(function () {

    get_about();
});

function get_about() {
    var url = 'get_about';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            document.getElementById("about_us").innerHTML = o.about_us;
            document.getElementById("mission").innerHTML = o.mission;
            document.getElementById("vision").innerHTML = o.vision;
                
        });
    });
}