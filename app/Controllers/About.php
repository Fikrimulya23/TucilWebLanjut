<?php namespace App\Controllers;

class About extends BaseController {
    
    public function index() {
		echo view('templates/header');
		echo view('about');
		echo view('templates/footer');
	}
}