<?php

namespace App\Controllers;

use App\Config\View;

class AuthController
{
    public function login()
    {
        View::render("auth/login");
    }
}
