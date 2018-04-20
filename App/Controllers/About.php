<?php

namespace App\Controllers;

use \Core\View;


/**
* 
*/
class About extends \Core\Controller
{
	public function showAction()
	{
		View::renderTemplate('About/about.html');
	}
}