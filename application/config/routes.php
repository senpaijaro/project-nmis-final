<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['ShowAdmin']		  		  = 'Showadministrator/Showadmin';
$route['ShowprofileAdmin/(:any)'] = 'Showadministrator/ShowprofileAdmin';
$route['ShowLogs'] = 'Logs/ShowLogs';

$route['Showprofileuser/(:any)'] = 'showuser/Showprofileuser';
$route['ShowRequested/(:any)'] = 'Requested/ShowRequested';
$route['ViewCompleteds/(:any)'] = 'Requested/ViewCompleteds';
$route['Showcompleted'] = 'Requested/Showcompleted';
$route['Showcancelled'] = 'Requested/Showcancelled';
$route['Adminlogs'] 	= 'Logs/Adminlogs';
$route['Userlogs'] 		= 'Logs/Userlogs';
$route['logout'] 		= 'auth/logout';
#user
$route['home'] = 'User/home';
$route['contact'] = 'User/contact';
$route['processing'] = 'User/processing';
$route['Showrequest/(:any)'] = 'User/Showrequest';
$route['Completed'] = 'User/Completed';
$route['ViewCompleted/(:any)'] = 'User/ViewCompleted';
$route['Cancelled'] = 'User/Cancelled';
$route['ViewCancelled/(:any)'] = 'User/ViewCancelled';



