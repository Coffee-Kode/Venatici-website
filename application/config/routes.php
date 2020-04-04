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
$route['get_img'] = 'private_ctrl/get_img';
$route['get_plans'] = 'private_ctrl/get_plans';
$route['get_programs'] = 'private_ctrl/get_programs';
$route['get_services'] = 'private_ctrl/get_services';

//default routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
