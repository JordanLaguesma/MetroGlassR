<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Initialize Models
use App\Models\Customers;
use App\Models\Products;

class UICashier extends BaseController
{
    protected $modelCustomers;
    protected $modelProducts;
    public function __construct()
    {
        $this->modelCustomers = new Customers();
        $this->modelProducts  = new Products();
    }
    public function ui_dashboard()
    {
        return view('frontend/cashier/index');
    }
}
