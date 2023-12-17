<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Initialize Models
use App\Models\Cashiers;
use App\Models\Customers;
use App\Models\DeliveryPersonnel;
use App\Models\Products;
use App\Models\Returns;
use App\Models\Users;

class UIAdmin extends BaseController
{
    public function ui_dashboard()
    {
        return view('frontend/admin/index');
    }
}
