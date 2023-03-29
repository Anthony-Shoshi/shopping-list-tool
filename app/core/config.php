<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT', 'http://localhost/personal/shopping-list-tool/public');
} else {
    define('ROOT', 'https://mydomain.com');
}