<?php

$service_manager = array(
    'factories' => array(
        'CodeIgniter' => function ($sm) {
            return get_instance();
        },
        'TestService' => function($sm) {
            return new \Service\TestService();
        }
    )
);