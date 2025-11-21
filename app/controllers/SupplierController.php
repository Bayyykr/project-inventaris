<?php

namespace App\Controllers;

use App\Config\View;

class SupplierController
{
    public function index()
    {
        View::render("supplier/index");
    }
}
