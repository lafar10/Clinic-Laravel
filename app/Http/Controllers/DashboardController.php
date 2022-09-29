<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index()
    {
         $appointments = Appointment::where('date_appointment', Carbon::now()->format('d-m-y'))->where('status','En Attente')->get();
       
        return view('pages.Dashboard',compact('appointments'));
    }

    public function indice()
    {
        return view('home');
    }
}
