<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index() {
        return view(view: 'car.index', [
            'company' => 'my company', 
        ])
        }
}
