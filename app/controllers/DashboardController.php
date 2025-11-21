<?php

namespace App\Controllers;

use App\Config\View;

class DashboardController
{
    public function index()
    {
        View::render("dashboard/index");
    }
}
