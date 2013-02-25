<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testsm extends CI_Controller
{
    public function index()
    {
        echo $this->service_manager->get('TestService')->hello();
    }

}