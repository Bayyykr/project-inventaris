<?php

use App\Config\Router;
use App\Controllers\DashboardController;
use App\Controllers\UserController;

Router::add('GET', '/dashboard', DashboardController::class, 'index');
Router::add('GET', '/users', UserController::class, 'index');
