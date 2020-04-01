$(document).ready(function () {
    get_about();
    get_services();
    tbody_plans();

    $('.accordian-body').on('show.bs.collapse', function () {
        $(this).closest("table")
            .find(".collapse.in")
            .not(this)
    });
});

const url_about = 'get_about';
const url_services = 'get_services';
const url_plans = 'get_plans';
const url_details = 'get_details';

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
                fil += "<a class='ml-2' id='btn_modal_add_detail' data-toggle='modal' data-target='#modal_add_details'><i class='fas fa-plus'></i></a>";
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

$("body").on("click", "#btn_modal_edit_plans", function (e) {
    e.preventDefault();
    var id_plans = $(this).parents("tr").find("td").html();
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            if (o.id_plans == id_plans) {
                $("#plan_title").val(o.title);
                $("#plan_description").val(o.description);
                $("#plan_cost").val(o.cost);
            }
        });
    });
});

$("body").on("click", "#btn_modal_edit_details", function (e) {
    e.preventDefault();
    var id_details = $(this).parents("tr").find("td").html();
    $.getJSON(url_details, function (result) {
        $.each(result, function (i, o) {
            if (o.id_details == id_details) {
                $("#edit_detail_description").val(o.description);
                if (o.check == 1) {
                    $('#edit_detail_switch').prop('checked', true)
                } else {
                    $('#edit_detail_switch').prop('checked', false)
                }
            }
        });
    });
});

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
