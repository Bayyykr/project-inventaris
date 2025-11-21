<?php

namespace App\Controllers;

use App\Config\View;

class BarangController
{
    public function index()
    {
        View::render("barang/index");
    }
}
