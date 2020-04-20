$(document).ready(function () {
    get_about();
    get_programs();
    get_contact();
    get_services();
    tbody_plans();
    tbody_imgs();

    $('.accordian-body').on('show.bs.collapse', function () {
        $(this).closest("table")
            .find(".collapse.in")
            .not(this)
    });
});

const url_about = 'get_about';
const url_contact = 'get_contact';
const url_programas = 'get_programs';
const url_services = 'get_services';
const url_plans = 'get_plans';
const url_details = 'get_details';
const url_img = 'get_img';

const darkSwitch = document.getElementById('darkSwitch');
const theme = document.getElementById('link_css');
const dark = 'assets/lib/bootswatch/bootstrap-superhero.min.css';
const ligth = 'assets/lib/bootswatch/bootstrap-cosmo.min.css';

window.addEventListener('load', () => {
    //$("#loader").addClass("is-active");
    if (darkSwitch) {
        initTheme();
        darkSwitch.addEventListener('change', () => {
            resetTheme();
        });
    }
    $("#loader").removeClass("is-active");
});

function initTheme() {
    const darkThemeSelected =
        localStorage.getItem('darkSwitch') !== null &&
        localStorage.getItem('darkSwitch') === 'dark';
    darkSwitch.checked = darkThemeSelected;
    darkThemeSelected ? theme.setAttribute('href', dark) :
        theme.setAttribute('href', ligth);
}

function resetTheme() {
    if (darkSwitch.checked) {
        theme.setAttribute('href', dark);
        localStorage.setItem('darkSwitch', 'dark');
    } else {
        theme.setAttribute('href', ligth);
        localStorage.removeItem('darkSwitch');

    }
}

function get_about() {
    $.getJSON(url_about, function (result) {
        $.each(result, function (i, o) {
            $("#about_us").val(o.about_us);
            $("#mission").val(o.mission);
            $("#vision").val(o.vision);
        });
    });
}

function get_contact() {
    $.getJSON(url_contact, function (result) {
        $.each(result, function (i, o) {
            $("#contact_description").val(o.description);
            $("#contact_address").val(o.address);
            $("#contact_email").val(o.email_1);
            $("#contact_phone_1").val(o.phone_1);
            $("#contact_phone_2").val(o.phone_2);
            $("#contact_maps").val(o.url_maps);
            $("#contact_facebook").val(o.url_facebook);
            $("#contact_instagram").val(o.url_instagram);
        });
    });
}

function get_services() {
    $.getJSON(url_services, function (result) {
        $.each(result, function (i, o) {
            if (o.id_service == 1) {
                $("#title_service_1").val(o.title);
                $("#description_service_1").val(o.description);
            } else if (o.id_service == 2) {
                $("#title_service_2").val(o.title);
                $("#description_service_2").val(o.description);
            } else if (o.id_service == 3) {
                $("#title_service_3").val(o.title);
                $("#description_service_3").val(o.description);
            }
        });
    });
}

function get_programs() {
    $.getJSON(url_services, function (result) {
        $.each(result, function (i, o) {
            $("#programs").val(o.description);
        });
    });
}

function tbody_plans() {
    $("#tbody_plans_1").empty();
    $("#tbody_plans_2").empty();
    $("#tbody_plans_3").empty();
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                var fil = "<tr>";
                fil += "<td style='display:none'>" + o.id_plans + "</td>";
                fil += "<td ><i data-toggle='collapse' data-target='#demo" + o.id_plans + "' class='accordion-toggle fas fa-plus-circle mr-3'></i>" + o.title + "</td>";
                fil += "<td>" + o.description + "</td>";
                fil += "<td>" + o.cost + "</td>";
                fil += "<td align='right'>";
                fil += "<a class='ml-2' id='btn_modal_add_details' data-toggle='modal' data-target='#modal_add_details'><i class='fas fa-plus'></i></a>";
                fil += "<a class='ml-2' id='btn_modal_edit_plans' data-toggle='modal' data-target='#modal_edit_plans'><i class='fas fa-pencil-alt'></i></a>";
                fil += "</td>";
                fil += "</tr>";
                $.each(result, function (i, u) {
                    if (u.id_plans_details == o.id_plans) {
                        fil += "<td id='demo'" + o.id_plans + " style='display:none'>" + u.id_details + "</td>";
                        fil += "<td colspan=4 scope='col' class='hiddenRow'><div class='form-row'><div class='col-md-11 accordian-body collapse' id='demo" + o.id_plans + "'>"
                        fil += ((u.check == 1) ? "<i class='fa fa-check-circle mr-3 ml-5'></i>" : "<i class='fa fa-times-circle mr-3 ml-5'></i>") + u.description + "</div>";
                        fil += "<div class='col-md-1 accordian-body collapse' id='demo" + o.id_plans + "'>"
                        fil += "<a class='float-right' id='btn_modal_delete_details' data-toggle='modal' data-target='#modal_delete_details'><i class='fas fa-times mr-3'></i></a>";
                        fil += "<a class='float-right' id='btn_modal_edit_details' data-toggle='modal' data-target='#modal_edit_details'><i class='fas fa-pencil-alt mr-3'></i></a>";
                        fil += "</div></div></td>";
                        fil += "</tr>";
                    }
                });
                $("#tbody_plans_" + o.id_services_plans).append(fil);
            });
        });
    });
}

function tbody_imgs() {
    $("#tbody_img").empty();
    $.getJSON(url_img, function (result) {
        $.each(result, function (i, o) {
            var fil = "<tr>";
            fil += "<td style='display: none;'>" + o.path + "</td>";
            fil += "<td style='display: none;'><p>" + o.id_img + "</p></td>";
            fil += "<td><a href='#' id='btn_modal_view_img' data-target='#modal_view_img' data-toggle='modal'>" + o.path + "</a></td>";
            fil += "</tr>";
            $("#tbody_img").append(fil);
        });
    });
}

$("#btn_about").on("click", function (e) {
    e.preventDefault();
    var about_us = $("#about_us").val();
    var mission = $("#mission").val();
    var vision = $("#vision").val();

    $.ajax({
        url: 'save_about',
        type: 'post',
        dataType: 'json',
        data: { about_us, mission, vision },
        success: function (o) {
            if (o.msg == "1") {
                alert("Se ha guardado el registro")
            } else {
                alert("No se ha podido guardar el registro")
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_programs").on("click", function (e) {
    e.preventDefault();
    var programs = $("#programs").val();

    $.ajax({
        url: 'save_programs',
        type: 'post',
        dataType: 'json',
        data: { programs },
        success: function (o) {
            if (o.msg == "1") {
                alert("Se ha guardado el registro")
            } else {
                alert("No se ha podido guardar el registro")
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_add_img").on("click", function (e) {
    e.preventDefault();
    var data = new FormData($('#form_img')[0]);

    $.ajax({
        url: 'save_img',
        type: 'post',
        dataType: 'json',
        data: data,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        timeout: false,
        success: function (o) {
            if (o.msg == "1") {
                tbody_imgs();
                $("#img_carousel").val("");
                alert("Se ha guardado el registro")
            } else if (o.msg == "3") {
                alert("La imagen no cumple con el formato admitido")
            } else {
                alert("No se ha podido guardar el registro")
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_confirm_delete_img").on("click", function (e) {
    var id_img = $("#id_img_modal").val();
    var path_img = $("#path_img_modal").val();

    $("#div_confirm_delete_img").empty();
    $("#div_confirm_delete_img").append("<input type='text' id='id_delete_img' value='" + id_img + "'/><input type='text' id='path_delete_img' value='" + path_img + "'/>");
});

$("#btn_delete_img").on("click", function (e) {
    e.preventDefault();
    var id_img = $("#id_delete_img").val();
    var img_path = $("#path_delete_img").val();

    $.ajax({
        url: 'delete_img',
        type: 'post',
        dataType: 'json',
        data: { id_img, img_path },
        success: function (o) {
            if (o.msg == "1") {
                tbody_imgs();
                $('#modal_confirm_delete_details').modal('hide');
                $('#modal_view_img').modal('hide');
                alert("Se ha eliminado el registro")
            } else {
                alert("No se ha podido eliminar el registro")
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_services_1").on("click", function (e) {
    e.preventDefault();
    var title = $("#title_service_1").val();
    var description = $("#description_service_1").val();

    update_service(1, title, description);
});

$("#btn_services_2").on("click", function (e) {
    e.preventDefault();
    var title = $("#title_service_2").val();
    var description = $("#description_service_2").val();

    update_service(2, title, description);
});

$("#btn_services_3").on("click", function (e) {
    e.preventDefault();
    var title = $("#title_service_3").val();
    var description = $("#description_service_3").val();

    update_service(3, title, description);
});

$("#btn_plans").on("click", function (e) {
    e.preventDefault();
    var plan_id = $("#plan_id").val();
    var plan_title = $("#plan_title").val();
    var plan_description = $("#plan_description").val();
    var plan_cost = $("#plan_cost").val();

    $.ajax({
        url: 'save_plans',
        type: 'post',
        dataType: 'json',
        data: { plan_id, plan_title, plan_description, plan_cost },
        success: function (o) {
            if (o.msg == "1") {
                tbody_plans();
                $('#modal_edit_plans').modal('hide');
                alert("Se ha guardado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_add_detail").on("click", function (e) {
    e.preventDefault();
    var detail_description = $("#detail_description").val();
    var detail_switch = $("#detail_switch").is(":checked");
    var id_plans = $("#detail_id_plans").val();

    detail_switch = (detail_switch ? 1 : 2);
    $.ajax({
        url: 'add_details',
        type: 'post',
        dataType: 'json',
        data: { detail_description, detail_switch, id_plans },
        success: function (o) {
            if (o.msg == "1") {
                tbody_plans();
                $('#modal_add_details').modal('hide');
                alert("Se ha guardado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_detail").on("click", function (e) {
    e.preventDefault();
    var edit_detail_id = $("#edit_detail_id").val();
    var edit_detail_description = $("#edit_detail_description").val();
    var edit_detail_switch = $("#edit_detail_switch").is(":checked");

    edit_detail_switch = (edit_detail_switch ? 1 : 2);
    $.ajax({
        url: 'save_details',
        type: 'post',
        dataType: 'json',
        data: { edit_detail_id, edit_detail_description, edit_detail_switch },
        success: function (o) {
            if (o.msg == "1") {
                tbody_plans();
                $('#modal_edit_details').modal('hide');
                alert("Se ha guardado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_delete_detail").on("click", function (e) {
    e.preventDefault();
    var delete_detail_id = $("#delete_detail_id").val();

    $.ajax({
        url: 'delete_details',
        type: 'post',
        dataType: 'json',
        data: { delete_detail_id },
        success: function (o) {
            if (o.msg == "1") {
                tbody_plans();
                $('#modal_delete_details').modal('hide');
                alert("Se ha eliminado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_contact").on("click", function (e) {
    e.preventDefault();
    var description = $("#contact_description").val();
    var address = $("#contact_address").val();
    var email = $("#contact_email").val();
    var phone_1 = $("#contact_phone_1").val();
    var phone_2 = $("#contact_phone_2").val();
    var url_maps = $("#contact_maps").val();
    var url_facebook = $("#contact_facebook").val();
    var url_instagram = $("#contact_instagram").val();

    $.ajax({
        url: 'save_contact',
        type: 'post',
        dataType: 'json',
        data: {
            description,
            address,
            email,
            phone_1,
            phone_2,
            url_maps,
            url_facebook,
            url_instagram
        },
        success: function (o) {
            if (o.msg == "1") {
                alert("Se ha actualizado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
});

$("#btn_confirm_change_password").on("click", function (e) {
    e.preventDefault();
    var old_password = $("#old_password").val();
    var new_password = $("#new_password").val();
    var repeat_password = $("#repeat_password").val();

    if (new_password != repeat_password) {
        alert("Las contraseñas no coinciden");
    } else {
        $.ajax({
            url: 'change_password',
            type: 'post',
            dataType: 'json',
            data: { old_password, new_password },
            success: function (o) {
                if (o.msg == "1") {
                    $('#modal_change_password').modal('hide');
                    alert("Contraseña cambiada");
                } else if (o.msg == "3") {
                    alert("La contrase actual es incorrecta");
                } else {
                    alert("No se ha podido cambiar la contraseña");
                }
            },
            error: function () {
                alert("Error interno");
            }
        });
    }

});

$("body").on("click", "#btn_modal_edit_plans", function (e) {
    e.preventDefault();
    var id_plans = $(this).parents("tr").find("td").html();
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            if (o.id_plans == id_plans) {
                $("#plan_id").val(o.id_plans);
                $("#plan_title").val(o.title);
                $("#plan_description").val(o.description);
                $("#plan_cost").val(o.cost);
            }
        });
    });
});

$("body").on("click", "#btn_modal_add_details", function (e) {
    e.preventDefault();
    var id_plans = $(this).parents("tr").find("td").html();
    $("#detail_id_plans").val(id_plans);
});

$("body").on("click", "#btn_modal_edit_details", function (e) {
    e.preventDefault();
    var id_details = $(this).parents("tr").find("td").html();
    $.getJSON(url_details, function (result) {
        $.each(result, function (i, o) {
            if (o.id_details == id_details) {
                $("#edit_detail_description").val(o.description);
                $("#edit_detail_id").val(o.id_details);
                if (o.check == 1) {
                    $('#edit_detail_switch').prop('checked', true)
                } else {
                    $('#edit_detail_switch').prop('checked', false)
                }
            }
        });
    });
});

$("body").on("click", "#btn_modal_delete_details", function (e) {
    e.preventDefault();
    var id_details = $(this).parents("tr").find("td").html();
    $("#delete_detail_id").val(id_details);
});


$("body").on("click", "#btn_modal_view_img", function (e) {
    e.preventDefault();
    var img_path = $(this).parents("tr").find("td").html();
    var id_img = $(this).parents("tr").find("p").html();
    $("#modal_img").empty();
    $("#modal_img").append("<div style='display: none;'><input type='text' id='id_img_modal' value='" + id_img + "'/><input type='text' id='path_img_modal' value='" + img_path + "'/></div><img src='assets/images/" + img_path + "' alt='' style='width:100%'>");
});

function update_service(id_service, title, description) {
    $.ajax({
        url: 'save_services',
        type: 'post',
        dataType: 'json',
        data: { id_service, title, description },
        success: function (o) {
            if (o.msg == "1") {
                alert("Se ha guardado el registro");
            } else {
                alert("No se ha podido guardar el registro");
            }
        },
        error: function () {
            alert("Error interno");
        }
    });
}

/* ============ START TEST AREA ============ */
/*
$("#tbody_plans_1").on("click", "#plan_row", function (e) {
    var id_plans = $(this).children("td").html();
    load_details(id_plans, 1);
});

$("#tbody_plans_2").on("click", "#plan_row", function (e) {
    var id_plans = $(this).children("td").html();
    load_details(id_plans, 2);
});

$("#tbody_plans_3").on("click", "#plan_row", function (e) {
    var id_plans = $(this).children("td").html();
    load_details(id_plans, 3);
});

function load_details(id_plans, id_services) {
    var url = 'get_details';
    $("#tbody_details_" + id_services).empty();
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            if (o.id_plans_details == id_plans) {
                var fil = "<tr id='plan_row'>";
                fil += "<td style='display:none'>" + o.id_details + "</td>";
                fil += "<td>" + o.description + "</td>";
                fil += "<td>" + ((o.check == 1) ? "Activo" : "Inacativo") + "</td>";
                fil += "</tr>";
                $("#tbody_details_" + id_services).append(fil);
            }
        });
    });
}
*/
/* ============ START TEST AREA ============ */
