<?php

$doctrine = array (
    'driver'   => 'pdo_mysql',
    'user'     => 'user',
    'password' => 'password',
    'dbname'   => 'database',
    'devmode'  => false,
    'paths'    => array(
        realpath(APPPATH)."/application/models"
    )
);
