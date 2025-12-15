<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ipcontroller;


Route::get('/update-ip-address/{ip_address}', [ipcontroller::class, 'saveipaddress']);