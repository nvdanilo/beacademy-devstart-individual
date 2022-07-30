<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function __construct(Address $address)
    {
        $this->model = $address;
    }

    public function index()
    {
        return view("address.index");
    }

    public function create()
    {
        return view("address.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route("addresses.index");
    }
}
