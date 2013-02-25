<?php

$service_manager = array(
    'factories' => array(
        'CodeIgniter' => function ($sm) {
            return get_instance();
        },
        'TestService' => function($sm) {
            return new \Service\TestService();
        },
        'EntityManager' => function($sm) {
            $doctrine = array();
            include("doctrine.php");
            $config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($doctrine['paths'], $doctrine['devmode']);
            return \Doctrine\ORM\EntityManager::create($doctrine, $config);
        }
    )
);