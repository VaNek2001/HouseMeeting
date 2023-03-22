<?php
namespace App\Controllers;

use App\Models\UserModel;
use Framework\Controller;
use Framework\Exceptions\UnauthorizedException;
use Framework\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return $this->view('users.php', ['user' =>  $request->getUser(), 'message' => $request->getSession()['msg'], 'users' => UserModel::all()]);

    }
    public function getByID(Request $request, int $id)
    {

        if($request->getUser()->id != $id){
            throw new UnauthorizedException('');
        }
        return $this->view('user.php', ['user' =>  UserModel::getById($id)]);

    }
}