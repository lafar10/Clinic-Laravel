<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Payment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {  
         return view('pages.Dashboard');
    }

    public function indice()
    {
        return view('home');
    }
}
