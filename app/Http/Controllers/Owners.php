<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Owners extends Controller
{
    public function index()
    {
        return view("owners/index", [
            "owners" => Owner::all(), 
            // "owners" => Owner::where('address_2', '=', 'london')->get(),
        ]);

    }

    public function show(Owner $owner)
    {
        return view("owners/show", [
            "owner" => $owner
    ]);
}
}
