<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-07 10:40:55 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2020-09-07 10:40:55 --> Unable to connect to the database
ERROR - 2020-09-07 10:53:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2020-09-07 10:53:00 --> Unable to connect to the database
ERROR - 2020-09-07 10:53:01 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'root'@'localhost' (using password: YES) D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\drivers\mysqli\mysqli_driver.php 202
ERROR - 2020-09-07 10:53:01 --> Unable to connect to the database
ERROR - 2020-09-07 10:53:31 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\libraries\Smarty\sysplugins\smarty_internal_compilebase.php 78
ERROR - 2020-09-07 10:55:47 --> Severity: error --> Exception: Call to undefined function mysql_connect() D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\drivers\mysql\mysql_driver.php 136
ERROR - 2020-09-07 10:55:47 --> Severity: error --> Exception: Call to undefined function mysql_connect() D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\drivers\mysql\mysql_driver.php 136
ERROR - 2020-09-07 10:56:54 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 10:56:55 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 10:56:55 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 10:56:55 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 10:56:55 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:46 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 10:56:55 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:62 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:46 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 10:57:17 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:62 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:04:20 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:20 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:20 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:04:21 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:21 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:21 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:04:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:04:47 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:04:47 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:04:47 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:05:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:05:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:05:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:00 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:01 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:01 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:01 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:13 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:13 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:13 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:15 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:08:33 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:08:33 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:08:33 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:12:39 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:12:39 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:12:39 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:12:58 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:12:58 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:12:58 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:13:57 --> Severity: Notice --> Undefined index: password D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\models\accounts\login_execute.php 33
ERROR - 2020-09-07 11:13:57 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '7%9F%B6p%8B%89%C97'
127.0.0.1


ERROR - 2020-09-07 11:13:57 --> Severity: Notice --> Undefined index: login_id D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\models\accounts\login_execute.php 54
ERROR - 2020-09-07 11:13:57 --> Severity: Notice --> Undefined index: login_id D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\models\accounts\login_execute.php 70
ERROR - 2020-09-07 11:13:57 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` IS NULL
AND `districts`.`password` = '7%9F%B6p%8B%89%C97'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:13:57 --> Severity: Notice --> Undefined index: login_id D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\models\accounts\login_execute.php 92
ERROR - 2020-09-07 11:13:57 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` IS NULL
AND `accounts`.`password` = '7%9F%B6p%8B%89%C97'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:23:59 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:23:59 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:23:59 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:24:10 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:24:10 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:24:10 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:24:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:24:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:24:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:32:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:32:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:32:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:32:28 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:32:28 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:32:28 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:33:22 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:37:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:37:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:37:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:39:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:40:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:40:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:40:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:40:19 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:40:19 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:40:19 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:40:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:40:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:40:23 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:41:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:41:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:41:14 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:42:34 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%93E%92%05%FDu%B4Y'
127.0.0.1


ERROR - 2020-09-07 11:42:34 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = 'test@gmail.com'
AND `districts`.`password` = '%93E%92%05%FDu%B4Y'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:42:34 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = 'test@gmail.com'
AND `accounts`.`password` = '%93E%92%05%FDu%B4Y'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:43:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:43:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:43:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:44:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:44:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:44:11 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:44:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:44:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:44:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:44:44 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:45:25 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:46:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:46:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:46:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:46:04 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:47:53 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:49:32 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:54:26 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:55:24 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 11:55:49 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 11:58:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 11:58:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 11:58:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 11:58:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 11:58:31 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:00:16 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:03:46 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 12:06:29 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 12:06:29 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 12:06:29 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 12:06:29 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 12:06:29 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:07:07 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 12:07:07 --> Severity: error --> Exception: Using $this when not in object context D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\helpers\check_session_helper.php 6
ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `district_id`
FROM `accounts`
WHERE `password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
127.0.0.1


ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `districts`.`id`, `districts`.`name`, `districts`.`district_id`, `districts`.`division_id`, `districts`.`region_id`, `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`login_id` = '30009008'
AND `districts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `districts`.`active` = 1
AND `districts`.`scopes_id` = `scopes`.`id`
127.0.0.1


ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `accounts`.`id`, `accounts`.`region_id`, `accounts`.`district_id`, `accounts`.`role_code`, `accounts`.`employee_number`, `accounts`.`mailaddress`
FROM `accounts`
WHERE `accounts`.`employee_number` = '30009008'
AND `accounts`.`password` = '%27%B3%06%A1%2C07%22%EC%2A%8D%E9o%C0cq'
AND `accounts`.`active` = 1
127.0.0.1


ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\database\DB_query_builder.php , LINE:1364 , FUNCTION:get]
SELECT `scopes`.`scopes_data` as `scope_districts`
FROM `districts`, `scopes`
WHERE `districts`.`scopes_id` = `scopes`.`id`
AND `districts`.`district_id` = 'J1M4'
127.0.0.1


ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:49 , FUNCTION:index]
1
127.0.0.1


ERROR - 2020-09-07 12:15:02 --> [FILE:D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\application\controllers\top\login.php , LINE:65 , FUNCTION:index]
Array
(
    [division_id] => 1
    [district_id] => J1M4
    [region_id] => 1
    [account_type] => worker
    [scope_districts] => Array
        (
            [0] => J1M1
            [1] => J1M2
            [2] => J1M3
            [3] => J1M4
            [4] => J1M5
            [5] => J1M6
            [6] => J1M7
            [7] => J1M8
        )

    [worker_id] => 30009008
)

127.0.0.1


ERROR - 2020-09-07 14:55:09 --> Severity: 8192 --> The each() function is deprecated. This message will be suppressed on further calls D:\_WORKSPACE\Web\Xampp\htdocs\sjm\html\system\libraries\Smarty\sysplugins\smarty_internal_compilebase.php 78
