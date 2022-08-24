<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
use Alert;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.Appointment.Appointments', compact('appointments'));
    }

    public function index_status()
    {
        $appointments = Appointment::where('status', 'En Attente')
            ->where('date_appointment', Carbon::now()->format('y-m-d'))
            ->orderBy('heure_appointment', 'asc')->paginate(10);

        return view('pages.Appointment.AppointmentStatus', compact('appointments'));
    }

    public function create()
    {
        $appointments = Appointment::where('date_appointment', Carbon::now()->format('y-m-d'))->get();
        return view('pages.Appointment.AddAppointment', compact('appointments'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'type_maladie' => 'required',
            'montant' => 'required',
            'date_appointment' => 'required',
            'heure_appointment' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $appointment = Appointment::where('date_appointment', '=', $request->input('date_appointment'))->where('heure_appointment', '=', $request->input('heure_appointment'))->where('status', '=', 'En Attente')->first();

        if ($appointment === null) {

            $appointment = Appointment::create([
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'tele' => $request->input('tele'),
                'type_maladie' => $request->input('type_maladie'),
                'montant' => $request->input('montant'),
                'date_appointment' => $request->input('date_appointment'),
                'heure_appointment' => $request->input('heure_appointment'),
                'status' => $request->input('status'),
            ]);

            alert()->success('success', 'Appointment Created With Success ^+^');
        } else {
            alert()->warning('Warning', 'Appointment Already Exixts ^+^');
            return back();
        }

        return redirect()->route('appointments');
    }

    public function delete(Request $request)
    {
        $appointment = Appointment::find($request->input('appointment_id'));

        if (!$appointment) {
            return back();
        }

        $appointment->delete();

        alert()->success('success', 'Appointment Deleted With Success ^+^');

        return redirect()->back();
    }

    public function edit($id)
    {
        $appointments = Appointment::find($id);

        if (!$appointments)
            return back();


        return view('pages.Appointment.UpdateAppointment')->with('appointments', $appointments);
    }

    public function update(Request $request)
    {
        $appointment = Appointment::find($request->input('appointment_id'));

        if (!$appointment)
            return back();


        $appointment->update($request->all());
        toast('Appointment Updated With Success ^+^', 'success');

        return redirect()->route('appointments');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $appointments = Appointment::where('id', 'like', "%$search%")
            ->orwhere('nom', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('status', 'like', "%$search%")
            ->orwhere('tele', 'like', "%$search%")
            ->orwhere('montant', 'like', "%$search%")
            ->orwhere('type_maladie', 'like', "%$search%")
            ->orwhere('date_appointment', 'like', "%$search%")
            ->orwhere('heure_appointment', 'like', "%$search%")
            ->paginate(10);

        return view('pages.Appointment.Appointments')->with('appointments', $appointments);
    }


    public function pdf($id)
    {
        $appointment = Appointment::find($id);

        if (!$id)
            return back();

        $pdf = PDF::loadView('pages.Appointment.AppointmentPdf', compact('appointment'));
        return $pdf->download('appointment.pdf');
    }
}
