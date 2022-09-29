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
         $appointments = Appointment::where('date_appointment', Carbon::now()->format('d-m-y'))->where('status','En Attente')->get();
         $appointments1 = Payment::where('date_appointment', Carbon::today())->where('status','Payed')->sum('montant')->get();
       
         return view('pages.Dashboard',compact('appointments','appointments1'));
    }

    public function indice()
    {
        return view('home');
    }
}
