<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "device",
        "brand",
        "model",
        "serial_number",
        "accessories",
        "reported_problem",
        "service_description",
        "status",
        "price",
    ];
}