$(document).ready(function () {
    get_services();
    get_plans_8();
    get_plans_9();
    get_plans_10();
    get_plans_11();
});

function get_services() {
    var url = 'get_services';
    $.getJSON(url, function (result) {
        $.each(result, function (i, o) {
            if (o.id_service == 3) {
                document.getElementById("title_web").innerHTML = o.title;
                document.getElementById("description_web").innerHTML = o.description;
            }
        });
    });
}

function get_plans_8() {
    var url_plans = 'get_plans_web';
    var url_details = 'get_details_plan_8';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 8) {
                    var mod = "";
                    mod += "<div class='modal fade' id='modal_" + o.id_plans + "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                    mod += "<div class='modal-dialog' role='document'>";
                    mod += "<div class='modal-content'>";
                    mod += "<div class='modal-header text-center'>";
                    mod += "<h4 class='modal-title w-100 font-weight-bold'>Plan " + o.title + "</h4>";
                    mod += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    mod += "<span aria-hidden='true'>&times;</span></button></div>";
                    mod += "<div class='price-content'><ul>";
                    num = 0;
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
                            if (num < 7) {
                                fil += "<li class='pb-2'><i class='fa fa-check-circle'></i>" + u.description + "</li>";
                            } else if (num == 7) {
                                fil += "<li class='text-center'><button class='btn btn-outline-primary text-center' data-toggle='modal' data-target='#modal_" + o.id_plans + "'>Mostrar más</button></li>"
                            }
                            mod += "<li><i class='fa fa-check-circle'></i>" + u.description + "</li>"
                            num++;
                        }
                    });
                    mod += "</ul></div></div></div></div>";
                    $("#modal_web").append(mod);
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_8").append(fil);
                }
            });

        });
    });
}

function get_plans_9() {
    var url_plans = 'get_plans_web';
    var url_details = 'get_details_plan_9';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 9) {
                    var mod = "";
                    mod += "<div class='modal fade' id='modal_" + o.id_plans + "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                    mod += "<div class='modal-dialog' role='document'>";
                    mod += "<div class='modal-content'>";
                    mod += "<div class='modal-header text-center'>";
                    mod += "<h4 class='modal-title w-100 font-weight-bold'>Plan " + o.title + "</h4>";
                    mod += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    mod += "<span aria-hidden='true'>&times;</span></button></div>";
                    mod += "<div class='price-content'><ul>";
                    num = 0;
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
                            if (num < 7) {
                                fil += "<li class='pb-2'><i class='fa fa-check-circle'></i>" + u.description + "</li>";
                            } else if (num == 7) {
                                fil += "<li class='text-center'><button class='btn btn-outline-primary text-center' data-toggle='modal' data-target='#modal_" + o.id_plans + "'>Mostrar más</button></li>"
                            }
                            mod += "<li><i class='fa fa-check-circle'></i>" + u.description + "</li>"
                            num++;
                        }
                    });
                    mod += "</ul></div></div></div></div>";
                    $("#modal_web").append(mod);
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_9").append(fil);
                }
            });

        });
    });
}

function get_plans_10() {
    var url_plans = 'get_plans_web';
    var url_details = 'get_details_plan_10';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 10) {
                    var mod = "";
                    mod += "<div class='modal fade' id='modal_" + o.id_plans + "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                    mod += "<div class='modal-dialog' role='document'>";
                    mod += "<div class='modal-content'>";
                    mod += "<div class='modal-header text-center'>";
                    mod += "<h4 class='modal-title w-100 font-weight-bold'>Plan " + o.title + "</h4>";
                    mod += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    mod += "<span aria-hidden='true'>&times;</span></button></div>";
                    mod += "<div class='price-content'><ul>";
                    num = 0;
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
                            if (num < 7) {
                                fil += "<li class='pb-2'><i class='fa fa-check-circle'></i>" + u.description + "</li>";
                            } else if (num == 7) {
                                fil += "<li class='text-center'><button class='btn btn-outline-primary text-center' data-toggle='modal' data-target='#modal_" + o.id_plans + "'>Mostrar más</button></li>"
                            }
                            mod += "<li><i class='fa fa-check-circle'></i>" + u.description + "</li>"
                            num++;
                        }
                    });
                    mod += "</ul></div></div></div></div>";
                    $("#modal_web").append(mod);
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_10").append(fil);
                }
            });

        });
    });
}

function get_plans_11() {
    var url_plans = 'get_plans_web';
    var url_details = 'get_details_plan_11';
    $.getJSON(url_plans, function (result) {
        $.each(result, function (i, o) {
            $.getJSON(url_details, function (result) {
                if (o.id_plans == 11) {
                    var mod = "";
                    mod += "<div class='modal fade' id='modal_" + o.id_plans + "' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>";
                    mod += "<div class='modal-dialog' role='document'>";
                    mod += "<div class='modal-content'>";
                    mod += "<div class='modal-header text-center'>";
                    mod += "<h4 class='modal-title w-100 font-weight-bold'>Plan " + o.title + "</h4>";
                    mod += "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
                    mod += "<span aria-hidden='true'>&times;</span></button></div>";
                    mod += "<div class='price-content'><ul>";
                    num = 0;
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
                            if (num < 7) {
                                fil += "<li class='pb-2'><i class='fa fa-check-circle'></i>" + u.description + "</li>";
                            } else if (num == 7) {
                                fil += "<li class='text-center'><button class='btn btn-outline-primary text-center' data-toggle='modal' data-target='#modal_" + o.id_plans + "'>Mostrar más</button></li>"
                            }
                            mod += "<li><i class='fa fa-check-circle'></i>" + u.description + "</li>"
                            num++;
                        }
                    });
                    mod += "</ul></div></div></div></div>";
                    $("#modal_web").append(mod);
                    fil += "</ul>";
                    fil += "</div>";
                    fil += "</div>";
                    $("#details_plan_11").append(fil);
                }
            });

        });
    });
}
