<?php

namespace App\Controllers;

use App\Controllers\BaseController;

// Initialize Models
use App\Models\Customers;
use App\Models\Products;

class UICustomer extends BaseController
{
    protected $modelCustomers;
    protected $modelProducts;
    public function __construct()
    {
        $this->modelCustomers = new Customers();
        $this->modelProducts  = new Products();
    }
    public function ui_home()
    {
        $products = $this->modelProducts->findAll();

        return view('frontend/customer/index', ['products' => $products]);
    }
    public function ui_product_details()
    {
        $products = $this->modelProducts->findAll();

        return view('frontend/customer/product_details', ['products' => $products]);
    }
    public function ui_profile()
    {
        $products = $this->modelProducts->findAll();
        $customer = $this->modelCustomers->find($this->request->getGet('id')); // Get the customer data via his/her ID

        return view('frontend/customer/profile', ['products' => $products, 'customer' => $customer]);
    }
    public function ui_cart()
    {
        $products = $this->modelProducts->findAll();

        return view('frontend/customer/cart', ['products' => $products]);
    }
    public function ui_checkout()
    {
        $products = $this->modelProducts->findAll();

        return view('frontend/customer/checkout', ['products' => $products]);
    }
}