<?php

use ManinderjeetDevout\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use ManinderjeetDevout\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);