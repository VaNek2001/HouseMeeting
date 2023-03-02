<?php

namespace App\Controllers;

use Framework\Controller;

class TestController2 extends Controller
{
    public function test_c_2($name){
        return $this->view('test_c_2.php', ['name' =>  $name]);
    }
}