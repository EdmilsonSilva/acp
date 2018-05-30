<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Helpers\Layout;

class About extends Controller {

    public function index()
	{
		$layout = new Layout();
		return $layout->get_layout('about');
	}
}