<?php

use App\Config\Router;
use App\Controllers\BarangController;
use App\Controllers\DashboardController;
use App\Controllers\StokController;
use App\Controllers\SupplierController;
use App\Controllers\UserController;

Router::add('GET', '/dashboard', DashboardController::class, 'index');
Router::add('GET', '/users', UserController::class, 'index');
Router::add('GET', '/supplier', SupplierController::class, 'index');
Router::add('GET', '/barang', BarangController::class, 'index');
Router::add('GET', '/stokin', StokController::class, 'stockIn');
Router::add('GET', '/stokout', StokController::class, 'stockOut');
Router::add('GET', '/history', StokController::class, 'history');
