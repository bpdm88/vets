<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class Home extends Controller
{
    public function index()
    {
        $timeOfDay = date('a');

        if($timeOfDay == 'am') {
        $greeting = 'Good morning, welcome to our site';
        } else {
        $greeting = 'Good afternoon, welcome to our site';
        }
        
        return view("welcome", ["greeting" => $greeting]);
    }
}
