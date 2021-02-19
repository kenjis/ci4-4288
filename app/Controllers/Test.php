<?php

namespace App\Controllers;

use CodeIgniter\Router\Exceptions\RedirectException;

class Test extends BaseController
{
	public function index()
	{
		throw new RedirectException('/');
	}
}
