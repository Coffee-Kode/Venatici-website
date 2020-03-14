<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'website_ctrl';

// website routes
$route['home'] = 'website_ctrl';
$route['marketing'] = 'website_ctrl/marketing';
$route['emprende'] = 'website_ctrl/emprende';
$route['develop_web'] = 'website_ctrl/develop_web';

// private routes
$route['login'] = 'private_ctlr/login';
$route['autoadmin'] = 'private_ctlr/autoadmin';

// system routes
$route['signin'] = 'private_ctlr/signin';

//default routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
