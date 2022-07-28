<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    protected $customer;
    protected $order;

    public function __construct(Customer $customer, Order $order)
    {   
        $this->customer = $customer;
        $this->order = $order;
    }

    public function index()
    {
        $orders = Order::paginate(10);

        return view("order.index", compact("orders"));
    }

    public function create()
    {
        return view("order.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route("orders.index");
    }
}
