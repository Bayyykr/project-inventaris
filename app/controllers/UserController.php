<?php

namespace App\Controllers;

use App\Config\View;

class UserController
{
    public function index()
    {
        View::render("users/index");
    }
}
