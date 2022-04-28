<?php

$_DBCONF['host'] = 'legacy-db';
$_DBCONF['database'] = 'database_name';
$_DBCONF['user'] = 'root';
$_DBCONF['password'] = 'password';

$connect = mysqli_connect(
    $_DBCONF['host'],
    $_DBCONF['user'],
    $_DBCONF['password'],
    $_DBCONF['database']
);
