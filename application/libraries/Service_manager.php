<?php

use Zend\ServiceManager;

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Controller $ci
 * @property \Zend\ServiceManager\ServiceManager $serviceManager
 */
class CI_Service_manager
{
    public $ci;
    public $serviceManager;

    function __construct()
    {
        $this->ci =& get_instance();

        $service_manager = $this->getConfig();

        if (!empty($service_manager)) {
            $config = new ServiceManager\Config($service_manager);
            $this->serviceManager = new ServiceManager\ServiceManager($config);
        }
    }

    /**
     * Retrive the service manager
     *
     * @return Zend\ServiceManager\ServiceManager
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * Retrieve a registered instance
     *
     * @param  string  $name
     * @param  bool    $usePeeringServiceManagers
     * @return object|array
     */
    public function get($name, $usePeeringServiceManagers = true)
    {
        return $this->getServiceManager()->get($name, $usePeeringServiceManagers);
    }

    /**
     * Read configuration file and return array
     *
     * @return array
     */
    public function getConfig()
    {
        include(APPPATH . 'config/service_manager.php');
        return $service_manager;
    }
}
