<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Game routes
$route['games/view/(:any)'] = 'games/view/$1';

// Video routes
$route['videos'] = 'videos/index';
$route['videos/view/(:any)'] = 'videos/view/$1'; 