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