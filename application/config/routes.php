<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about/(:num)/(:any)'] = 'site/about/$1/$2';
$route['pass_var'] = 'site/pass_var';

$route['site/insert-data'] = 'site/insert_data_into_table';
$route['action/select-all'] = 'action/get_all_data';
$route['action/update-data'] = 'action/update_data';
$route['action/all-data'] = 'action/get_users';
$route['action/delete-user'] = 'action/delete_single_user';
$route['action/name-filter'] = "action/condition";
$route['action/name-email-filter'] = "action/multiCondition";
$route['action/messages'] = "action/get_messages";
$route['helpers/form'] = "user/form_helper_study";
