<?php
namespace App\Controllers;

class Login extends BaseController {

    public function index() {
        echo view('templates/authHeader');
        echo view('auth/login');
        echo view('templates/authFooter');
    }
}