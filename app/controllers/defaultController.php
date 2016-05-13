<?php
namespace App\Controllers;
use n9engine\Controller;
use App\models\Users;
class defaultController extends Controller
{
	public function index()
	{
        $user = new Users();
        $this->view->get('default/index', ['user' => $user->getName()]);
        echo $user->getName();
	}
    public function hello()
	{
        $this->view->get('default/hello', []);
	}
}