<?php
defined('BASEPATH') OR exit('No direct script access allowed');
CONST API_PREFIX = "";

$route['default_controller'] = 'welcome';

$route['api/(:any)'] = 'api/BaseController/indexAction/$1';

$route['api/(:any)/(:any)'] = 'api/BaseController/indexAction/$1/$2';

$route['api/(:any)/(:any)/(:any)'] = 'api/BaseController/indexAction/$1/$2/$3';

$route['api/(:any)/(:any)/(:any)/(:any)'] = 'api/BaseController/indexAction/$1/$2/$3/$4';


$route['404_override'] = '_404';
$route['403_override'] = '_404';
$route['500_override'] = '_404';
$route['translate_uri_dashes'] = FALSE;
