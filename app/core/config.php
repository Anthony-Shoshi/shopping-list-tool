<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost/personal/shopping-list-tool/public');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASSWORD', '');
    define('DBNAME', 'db_shopping_list_tool');
} else {
    define('ROOT', 'https://mydomain.com');
    define('DBHOST', '');
    define('DBUSER', '');
    define('DBPASSWORD', '');
    define('DBNAME', '');
}