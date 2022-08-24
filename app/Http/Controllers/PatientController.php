<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('id', 'desc')->paginate(10);
        return view('pages.Patient.Patients', compact('patients'));
    }

    public function create()
    {
        return view('pages.Patient.AddPatient');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'tele' => 'required|min:8|max:20',
            'email' => 'required|email',
            'maladie_type' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $patient = Patient::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'tele' => $request->input('tele'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
            'maladie_type' => $request->input('maladie_type'),
        ]);

        alert()->success('success', 'Patient Created With Success ^+^');
        return redirect()->route('patients');
    }

    public function delete(Request $request)
    {
        $patient = Patient::find($request->input('patient_id'));

        if (!$patient) {
            return back();
        }

        $patient->delete();

        alert()->success('success', 'Patient Deleted With Success ^+^');
        return redirect()->back();
    }

    public function edit($id)
    {
        $patients = Patient::find($id);

        if (!$patients)
            return back();


        return view('pages.Patient.UpdatePatient')->with('patients', $patients);
    }

    public function update(Request $request)
    {
        $patient = Patient::find($request->input('patient_id'));

        if (!$patient)
            return back();

        $patient->update($request->all());

        toast('Success', 'Updated With Success ^-^');
        return redirect()->route('patients');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $patients = Patient::where('id', 'like', "%$search%")
            ->orwhere('nom', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('tele', 'like', "%$search%")
            ->orwhere('maladie_type', 'like', "%$search%")
            ->paginate(10);

        return view('pages.Patient.Patients')->with('patients', $patients);
    }
}
