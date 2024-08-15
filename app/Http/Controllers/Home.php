<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Home extends Controller
{
    public function show()
    {
        return View::make('home',['title'=>'Pavilion Square']);
    }
}
