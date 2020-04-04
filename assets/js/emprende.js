$(document).ready(function () {
    get_services();
    get_plans_1();
    get_plans_2();
    get_plans_3();
    get_plans_4();
});

function get_services() {
    var url = 'get_services';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            if (o.id_service == 1) {
                document.getElementById("title_emprende").innerHTML = o.title;
                document.getElementById("description_emprende").innerHTML = o.description;
            }
        });
    });
}

function get_plans_1() {
    var url_plans = 'get_plans_emprende';
    var url_details = 'get_details_plan_1';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 1) {
                    var fil = "";
                    fil += "<div class='single-price border border-light'>";
                    fil += "<div class='price-head'>";
                    fil += "<h4>" + o.title + "</h3>";
                    fil += "<p>" + o.cost + "</p>";
                    fil += "</div>";
                    fil += "<div class='price-content'>";
                    fil += "<ul>";
                    $.each(result, function (i, u) {
                        if (u.id_plans_details == o.id_plans) {
                            fil += "<li class='pb-2'><i class=" + (u.check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") + "></i>" + u.description + "</li>";
                        }
                    });
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_1").append(fil);
                }
            });

        });
    });
}

function get_plans_2() {
    var url_plans = 'get_plans_emprende';
    var url_details = 'get_details_plan_2';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 2) {
                    var fil = "";
                    fil += "<div class='single-price border border-light'>";
                    fil += "<div class='price-head'>";
                    fil += "<h4>" + o.title + "</h3>";
                    fil += "<p>" + o.cost + "</p>";
                    fil += "</div>";
                    fil += "<div class='price-content'>";
                    fil += "<ul>";
                    $.each(result, function (i, u) {
                        if (u.id_plans_details == o.id_plans) {
                            fil += "<li class='pb-2'><i class=" + (u.check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") + "></i>" + u.description + "</li>";
                        }
                    });
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_2").append(fil);
                }
            });

        });
    });
}

function get_plans_3() {
    var url_plans = 'get_plans_emprende';
    var url_details = 'get_details_plan_3';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 3) {
                    var fil = "";
                    fil += "<div class='single-price border border-light'>";
                    fil += "<div class='price-head'>";
                    fil += "<h4>" + o.title + "</h3>";
                    fil += "<p>" + o.cost + "</p>";
                    fil += "</div>";
                    fil += "<div class='price-content'>";
                    fil += "<ul>";
                    $.each(result, function (i, u) {
                        if (u.id_plans_details == o.id_plans) {
                            fil += "<li class='pb-2'><i class=" + (u.check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") + "></i>" + u.description + "</li>";
                        }
                    });
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_3").append(fil);
                }
            });

        });
    });
}

function get_plans_4() {
    var url_plans = 'get_plans_emprende';
    var url_details = 'get_details_plan_4';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 4) {
                    var fil = "";
                    fil += "<div class='single-price border border-light'>";
                    fil += "<div class='price-head'>";
                    fil += "<h4>" + o.title + "</h3>";
                    fil += "<p>" + o.cost + "</p>";
                    fil += "</div>";
                    fil += "<div class='price-content'>";
                    fil += "<ul>";
                    $.each(result, function (i, u) {
                        if (u.id_plans_details == o.id_plans) {
                            fil += "<li class='pb-2'><i class=" + (u.check == 1 ? "'fa fa-check-circle'" : "'fa fa-times-circle'") + "></i>" + u.description + "</li>";
                        }
                    });
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_4").append(fil);
                }
            });

        });
    });
}

