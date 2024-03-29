<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'pages';
$route[''] = 'pages/index';
$route['desain-rumah'] = 'pages/concept';
$route['promo-green-bamboo-terrace'] = 'pages/promo';
$route['tipe-rumah'] = 'pages/homes';
$route['tipe-rumah/akane'] = 'pages/homes_akane';
$route['tipe-rumah/momiji'] = 'pages/homes_momiji';
$route['tipe-rumah/new-phase'] = 'pages/homes_newphase';
$route['fasilitas-perumahan'] = 'pages/facilities';
$route['berita-dan-promo'] = 'pages/news/rumah-mewah-di-bogor-kota';
$route['berita-dan-promo/(:any)'] = 'pages/news/$1';
$route['disclaimer'] = 'pages/disclaimer';
$route['privacy-policy'] = 'pages/privacy';
$route['contact'] = 'pages/contact';
$route['submit'] = 'pages/submit';
$route['submit-contact'] = 'pages/submitcontact';
$route['404_override'] = 'pages/notfound';

$route['email-contact-us'] = 'mail/contact_us';
$route['email-the-concept'] = 'mail/concept';
$route['email-index'] = 'mail/float';
$route['email-wa'] = 'mail/wa';
$route['email-wa-promo'] = 'mail/wa_promo';


$route['translate_uri_dashes'] = FALSE;
