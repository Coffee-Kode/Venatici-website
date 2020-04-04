$(document).ready(function () {
    get_services();
    get_plans();
});

function get_services() {
    var url = 'get_services';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            if (o.id_service == 2) {
                document.getElementById("title_marketing").innerHTML = o.title;
                document.getElementById("description_marketing").innerHTML = o.description;
            }
        });
    });
}

function get_plans() {
    var url_plans = 'get_plans';
    var url_details = 'get_details';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_services_plans == 2) {
                    var fil = "";
                    fil += "<div class='col-md-4'>";
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
                    fil += "</div>";
                    $("#card_marketing").append(fil);
                }
            });

        });
    });
}