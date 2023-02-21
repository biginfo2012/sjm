<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* top トップページ */
$route['default_controller'] = 'top/login';
/* top 404エラー */
$route['404_override'] = 'top/show_404';


/* login ログイン */
$route['login'] = 'top/login';
$route['logout'] = 'top/login/logout';

$route['search'] = 'top/top';

/* day */
$route['day'] = 'top/day';
/* day personal */
$route['day/user'] = 'top/dayUser';
/* week */
$route['week'] = 'top/week';
/* week personal */
$route['week/user'] = 'top/weekUser';
/* month */
$route['month'] = 'top/month';
/* month personal */
$route['month/user'] = 'top/monthUser';
/* month */
$route['result'] = 'top/result';

$route['suggest/district'] = 'top/suggest/district';
$route['suggest/facility'] = 'top/suggest/facility';

$route['ajax/get_account_detail'] = 'top/ajax/get_account_detail';
$route['ajax/get_navx_last']      = 'top/ajax/get_navx_last';
$route['ajax/login_district']     = 'top/ajax/login_district';
$route['ajax/get_search_amount']  = 'top/ajax/get_search_amount';

$route['cmd/set_worker']     = 'cmd/set_worker';
$route['cmd/set_facilities'] = 'cmd/set_facilities';
$route['cmd/set_districts']  = 'cmd/set_districts';

$route['xlsx_import'] = 'top/top/xlsx_import';

