<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{   
    public function __construct(Customer $customer)
    {
        $this->model = $customer;
    }

    public function index()
    {
        $customers = Customer::all();

        return view("customer.index", compact("customers"));
    }

    public function register()
    {
        return view("customer.register");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route("customers.index");
    }
}
