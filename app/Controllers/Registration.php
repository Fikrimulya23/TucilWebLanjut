<?php
namespace App\Controllers;

class Registration extends BaseController {

    public function index() {
        echo view('templates/authHeader');
        echo view('auth/registration');
        echo view('templates/authFooter');
    }
}