<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{   
    public function __construct(Order $order)
    {
        $this->model = $order;
    }

    public function index()
    {
        $orders = Order::all();

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
