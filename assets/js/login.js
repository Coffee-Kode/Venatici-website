
$(document).ready(function () {

    var base_url = 'http://localhost/venatici-website/admin';

    $("#btn_login").on("click", function (e) {
        e.preventDefault();
        var mail = $("#email").val();
        var pass = $("#password").val();

        $.ajax({
            url: 'signin',
            type: 'post',
            dataType: 'json',
            data: { mail: mail, pass: pass },
            success: function (o) {
                if (o.msg == "1") {
                    window.location.href = base_url;
                } else {
                    alert("Datos Incorrecto");
                }
            },
            error: function () {
                alert("Acceso Denegado");
            }
        });
    });
});
