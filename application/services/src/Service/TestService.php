<?php

namespace Service;

defined('BASEPATH') OR exit('No direct script access allowed');

class TestService
{
    public function hello($name = null)
    {
        return "Hi ".($name == null ? "John Doe" : $name);
    }
}