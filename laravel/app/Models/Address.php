<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "address_type",
        "address",
        "number",
        "district",
        "postal_code",
        "city",
        "state",
    ];

    

}
