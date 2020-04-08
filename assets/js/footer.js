$(document).ready(function () {
    get_contact_footer();
});


function get_contact_footer() {
    var url = 'get_contact';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            $("#mail_to").val(o.email_1);
            document.getElementById("footer_address").innerHTML = o.address;
            document.getElementById("footer_phone").innerHTML = o.phone_1 + (o.phone_2 != null || o.phone_2 != "" ? (", " + o.phone_2) : "");
            $("#footer_email").append("<i class='fas fa-envelope mr-3'></i> <a href='mailto:" + o.email_1 + "'>" + o.email_1 + "</a>");
            $("#rrss").append("<a href='" + o.url_facebook + "' target='_blank'><i class='fab fa-facebook-f mr-3 fa-lg'></i></a><a href='" + o.url_telegram + "' target='_blank'><i class='fab fa-instagram mr-3 fa-lg'></i></a>");
        });
    });
}