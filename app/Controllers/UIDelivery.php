<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Initialize Models

class UIDelivery extends BaseController
{
    public function index()
    {
        return view('frontend/delivery/index');
    }
}
