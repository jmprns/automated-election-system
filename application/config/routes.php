<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['election']['get'] = "ElectionController/index";
$route['election/create']['get'] = "ElectionController/create";
$route['election/create']['post'] = "ElectionController/store";
$route['election/(:num)/dashboard']['get'] = "ElectionController/dashboard/$1";
$route['election/(:num)/edit']['get'] = "ElectionController/edit/$1";
$route['election/(:num)/edit']['post'] = "ElectionController/update/$1";

$route['position/(:num)/create']['get'] = "PositionController/create/$1";
