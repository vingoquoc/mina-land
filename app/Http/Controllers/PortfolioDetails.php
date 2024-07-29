<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PortfolioDetails extends Controller
{
    public function show(string $id)
    {
        return View::make('portfolio-details',['title'=>'Portfolio-Details']);
    }
}
