<?php

namespace App\Controllers;

use App\Config\View;

class StokController
{
    public function stockIn()
    {
        View::render("stok/stokin");
    }

    public function stockOut()
    {
        View::render("stok/stokout");
    }

    public function history()
    {
        View::render("stok/history");
    }
}
