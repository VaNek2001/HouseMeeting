<?php
namespace App\Controllers;

use App\Models\OwnerModel;
use Framework\Container;
use Framework\Controller;
use Framework\Request;

class OwnerController extends Controller
{
    public function index(Request $request){
        return $this->view('owners.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'owners' => OwnerModel::all()]);

    }


}