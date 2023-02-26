<?php

namespace App\Controllers;

use Framework\Controller;

class TestController1 extends Controller
{
    public function test_c_1($name, $value_id=null){
        return $this->view('test_c_1.php', ['name' =>  $name, 'value_id' => $value_id]);
    }
}