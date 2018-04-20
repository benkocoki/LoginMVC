<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;
use \App\Auth;


/**
* 
*/
class Posts extends \Core\Controller
{
	protected function before()
	{
		parent::before();
		$this->user = Auth::getUser();
		$this->requireLogin();
	}

	public function showAction()
	{
	    View::renderTemplate('Posts/post.html');
		
	}
	public static function getPostById()
	{
		if(empty($_SESSION['user_id'])){
			return false;
		}
		else {
			return User::loadPostById($_SESSION['user_id']);
		}


	}

}