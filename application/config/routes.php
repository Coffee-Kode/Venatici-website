<?php
defined('BASEPATH') or exit('No direct script access allowed');

//default routes
$route['default_controller'] = 'website_ctrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* ===== WEB PAGE ROUTE ===== */

// page routes
$route['home'] = 'website_ctrl/home';
$route['marketing'] = 'website_ctrl/marketing';
$route['emprende'] = 'website_ctrl/emprende';
$route['web'] = 'website_ctrl/develop_web';
$route['mail'] = 'website_ctrl/send_mail';

// get routes
$route['get_about'] = 'website_ctrl/get_about';
$route['get_contact'] = 'website_ctrl/get_contact';
$route['get_details'] = 'website_ctrl/get_details';
$route['get_details_plan_1'] = 'website_ctrl/get_details_plan_1';
$route['get_details_plan_2'] = 'website_ctrl/get_details_plan_2';
$route['get_details_plan_3'] = 'website_ctrl/get_details_plan_3';
$route['get_details_plan_4'] = 'website_ctrl/get_details_plan_4';
$route['get_details_plan_5'] = 'website_ctrl/get_details_plan_5';
$route['get_details_plan_6'] = 'website_ctrl/get_details_plan_6';
$route['get_details_plan_7'] = 'website_ctrl/get_details_plan_7';
$route['get_details_plan_8'] = 'website_ctrl/get_details_plan_8';
$route['get_details_plan_9'] = 'website_ctrl/get_details_plan_9';
$route['get_details_plan_10'] = 'website_ctrl/get_details_plan_10';
$route['get_details_plan_11'] = 'website_ctrl/get_details_plan_11';
$route['get_details_emprende'] = 'website_ctrl/get_details_emprende';
$route['get_details_marketing'] = 'website_ctrl/get_details_marketing';
$route['get_details_web'] = 'website_ctrl/get_details_web';
$route['get_img'] = 'website_ctrl/get_img';
$route['get_plans'] = 'website_ctrl/get_plans';
$route['get_plans_emprende'] = 'website_ctrl/get_plans_emprende';
$route['get_plans_marketing'] = 'website_ctrl/get_plans_marketing';
$route['get_plans_web'] = 'website_ctrl/get_plans_web';
$route['get_programs'] = 'website_ctrl/get_programs';
$route['get_services'] = 'website_ctrl/get_services';

/* ===== PRIVATE ROUTE ===== */

// page routes
$route['admin'] = 'private_ctrl';

// system routes
$route['signin'] = 'private_ctrl/signin';
$route['logout'] = 'private_ctrl/logout';

// save routes
$route['save_about'] = 'private_ctrl/save_about';
$route['save_contact'] = 'private_ctrl/save_contact';
$route['save_details'] = 'private_ctrl/save_details';
$route['save_plans'] = 'private_ctrl/save_plans';
$route['save_programs'] = 'private_ctrl/save_programs';
$route['save_services'] = 'private_ctrl/save_services';

// add routes
$route['save_img'] = 'private_ctrl/save_img';
$route['add_details'] = 'private_ctrl/add_details';

// delete routes
$route['delete_img'] = 'private_ctrl/delete_img';
$route['delete_details'] = 'private_ctrl/delete_details';
