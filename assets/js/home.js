$(document).ready(function () {
    get_about();
    get_programs();
    get_img();
    get_services();
    get_contact();
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

function get_programs() {
    var url = 'get_programs';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            document.getElementById("programs").innerHTML = o.description;
        });
    });
}


"<li data-target='#carousel-1' data-slide-to='1'></li>"

function get_img() {
    var url = 'get_img';
    $.getJSON(url, function (result) {
        var num = 0;
        $.each(result, function (i, o) {
            var fil = ""
            var ol = ""
            if (num == 0) {
                fil += "<div class='carousel-item active'>";
                ol += "<li data-target='#carousel-1' data-slide-to='0' class='active'></li>";
            } else {
                fil += "<div class='carousel-item'>";
                ol += "<li data-target='#carousel-1' data-slide-to='" + num + "' class='active'></li>";
            }
            num++;
            fil += "<img class='d-block w-100 rounded' src='assets/images/" + o.path + "'>";
            fil += "</div>";
            $("#carousel").append(fil);
            $("#carousel-indicators").append(ol);
        });
    });
}

function get_services() {
    var url = 'get_services';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            var fil = ""
            fil += "<div class='col-md-4'>"
            fil += "<span class='fa-stack fa-4x mb-2'>"
            fil += "<i class='fas fa-circle fa-stack-2x icon-color'></i>"
            fil += "<i class='" + o.icon + "'></i>"
            fil += "</span>"
            fil += "<h3 class='service-heading'>" + o.title + "</h3>"
            fil += "<p id='text' class='grey-text'>" + o.description + "</p>"
            fil += "<a class='btn btn-primary btn-sm mb-4 rounded-pill btn-outline-primary' href='" + o.path + "'>"
            fil += "<h6 class='pt-2'>más información</h6>"
            fil += "</a>"
            fil += "</div>"
            $("#services").append(fil);
        });
    });
}

function get_contact() {
    var url = 'get_contact';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            $("#mail_to").val(o.email_1);
            document.getElementById("contact_description").innerHTML = o.description;
            document.getElementById("contact_address").innerHTML = o.address;
            document.getElementById("contact_email").innerHTML = o.email_1;
            document.getElementById("contact_phone_1").innerHTML = o.phone_1;
            document.getElementById("contact_phone_2").innerHTML = o.phone_2;
            $("#map-container-google-11").append("<iframe src='" + o.url_maps + "' frameborder='0' style='border:0' allowfullscreen></iframe>");
        });
    });
}

$("#btn_send").on("click", function (e) {
    e.preventDefault();
    var mail_to = $("#mail_to").val();
    var name = $("#name").val();
    var email = $("#email").val();
    var title = $("#title").val();
    var message = $("#message").val();

    $.ajax({
        url: 'mail',
        type: 'post',
        dataType: 'json',
        data: { name, email, title, message, mail_to },
        success: function (o) {
            console.log(o.msg);
        },
        error: function () {
            alert("Acceso Denegado");
        }
    });
});