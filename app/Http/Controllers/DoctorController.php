<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->paginate(5);

        return view('pages.Doctor.Doctors', compact('doctors'));
    }

    public function create()
    {
        return view('pages.Doctor.AddDoctor');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'tele' => 'required|min:8|max:20',
            'email' => 'required|email',
            'specialite' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $doctor = Doctor::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'tele' => $request->input('tele'),
            'email' => $request->input('email'),
            'adresse' => $request->input('adresse'),
            'specialite' => $request->input('specialite'),
        ]);

        alert()->success('success', 'Doctor Created With Success ^+^');
        return redirect()->route('doctors');
    }

    public function delete(Request $request)
    {
        $doctor = Doctor::find($request->input('doctor_id'));

        if (!$doctor) {
            return back();
        }

        $doctor->delete();

        alert()->success('success', 'Doctor Deleted With Success ^+^');
        return redirect()->back();
    }

    public function edit($id)
    {
        $doctors = Doctor::find($id);

        if (!$doctors)
            return back();


        return view('pages.Doctor.UpdateDoctor')->with('doctors', $doctors);
    }

    public function update(Request $request)
    {
        $doctor = Doctor::find($request->input('doctor_id'));

        if (!$doctor)
            return back();

        $doctor->update($request->all());

        toast('Doctor Updated With Success ^+^', 'success');
        return redirect()->route('doctors');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $doctors = Doctor::where('id', 'like', "%$search%")
            ->orwhere('nom', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%")
            ->orwhere('tele', 'like', "%$search%")
            ->orwhere('specialite', 'like', "%$search%")
            ->paginate(10);

        return view('pages.Doctor.Doctors')->with('doctors', $doctors);
    }
}
