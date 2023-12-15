<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Monitoring;

class HomeController extends Controller
{
    public function index()
    {
        $lastData = Monitoring::latest()->first();
        return view('chart', ['data' => $lastData]);
    }
}
