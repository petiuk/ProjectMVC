<?php
namespace App\Controllers;
use n9engine\Controller;
class errorsController extends Controller
{
	public function notFound()
	{
        $this->view->get('errors/notFound', []);
	}
}