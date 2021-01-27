<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*-----------About------------*/
$route['pweb'] = 'welcome/pweb';
$soute['web']='about/web';
$route['tentangsaya']='about/saya';
$route['tentangkharisma']='about/kharisma';
$route['list']='resep/list';
$route['pallubasa']='resep/pallubasa';
$route['papedatelorayam']='resep/papedatelorayam';
$route['rawonsurabaya']='resep/rawonsurabaya';
$route['satelilitayamkhasbali']='resep/satelilitayamkhasbali';
$route['seblakbandung']='resep/seblakbandung';




$route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
