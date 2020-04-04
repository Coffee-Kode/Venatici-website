<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'website_ctrl';

// website routes
$route['home'] = 'website_ctrl/home';
$route['marketing'] = 'website_ctrl/marketing';
$route['emprende'] = 'website_ctrl/emprende';
$route['web'] = 'website_ctrl/develop_web';
$route['mail'] = 'website_ctrl/send_mail';

// private routes
$route['admin'] = 'private_ctrl';

// system routes
$route['signin'] = 'private_ctrl/signin';
$route['logout'] = 'private_ctrl/logout';

// get routes
$route['get_about'] = 'private_ctrl/get_about';
$route['get_details'] = 'private_ctrl/get_details';
$route['get_details'] = 'private_ctrl/get_details';
$route['get_details_plan_1'] = 'private_ctrl/get_details_plan_1';
$route['get_details_plan_2'] = 'private_ctrl/get_details_plan_2';
$route['get_details_plan_3'] = 'private_ctrl/get_details_plan_3';
$route['get_details_plan_4'] = 'private_ctrl/get_details_plan_4';
$route['get_details_plan_5'] = 'private_ctrl/get_details_plan_5';
$route['get_details_plan_6'] = 'private_ctrl/get_details_plan_6';
$route['get_details_plan_7'] = 'private_ctrl/get_details_plan_7';
$route['get_details_plan_8'] = 'private_ctrl/get_details_plan_8';
$route['get_details_plan_9'] = 'private_ctrl/get_details_plan_9';
$route['get_details_plan_10'] = 'private_ctrl/get_details_plan_10';
$route['get_details_plan_11'] = 'private_ctrl/get_details_plan_11';
$route['get_details_emprende'] = 'private_ctrl/get_details_emprende';
$route['get_details_marketing'] = 'private_ctrl/get_details_marketing';
$route['get_details_web'] = 'private_ctrl/get_details_web';
$route['get_img'] = 'private_ctrl/get_img';
$route['get_plans'] = 'private_ctrl/get_plans';
$route['get_plans_emprende'] = 'private_ctrl/get_plans_emprende';
$route['get_plans_marketing'] = 'private_ctrl/get_plans_marketing';
$route['get_plans_web'] = 'private_ctrl/get_plans_web';
$route['get_programs'] = 'private_ctrl/get_programs';
$route['get_services'] = 'private_ctrl/get_services';

//default routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
