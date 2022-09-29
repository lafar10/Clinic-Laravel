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
         
         $appointments1 = Payment::where('date_appointment', Carbon::today())->where('status','Payed')->sum('montant')->get();
       
         return view('pages.Dashboard',compact('appointments1'));
    }

    public function indice()
    {
        return view('home');
    }
}
