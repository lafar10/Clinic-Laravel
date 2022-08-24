<?php

namespace App\Http\Controllers;

use PDF;
use Alert;
use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->paginate(10);
        return view('pages.Payment.Payments', compact('payments'));
    }

    public function total_today()
    {
        $payments = Payment::where('status', 'Payed')
            ->where('created_at', Carbon::now())
            ->orderBy('created_at', 'desc')->paginate(10);

        return view('pages.Payment.PaymentToday', compact('payments'));
    }

    public function create()
    {
        return view('pages.Payment.AddPayment');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'maladie_type' => 'required',
            'montant' => 'required',
            'payment_method' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $Payment = Payment::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'maladie_type' => $request->input('maladie_type'),
            'montant' => $request->input('montant'),
            'payment_method' => $request->input('payment_method'),
            'status' => $request->input('status'),
        ]);

        alert()->success('success', 'Payment Created With Success ^+^');
        return redirect()->route('payments');
    }

    public function delete(Request $request)
    {
        $payment = Payment::find($request->input('payment_id'));

        if (!$payment) {
            return back();
        }

        $payment->delete();

        alert()->success('success', 'Payment Deleted With Success ^+^');
        return redirect()->back();
    }

    public function edit($id)
    {
        $payments = Payment::find($id);

        if (!$payments)
            return back();


        return view('pages.Payment.UpdatePayment')->with('payments', $payments);
    }

    public function update(Request $request)
    {
        $payment = Payment::find($request->input('payment_id'));

        if (!$payment)
            return back();

        $payment->update($request->all());

        toast('Payment Updated With Success ^+^', 'success');
        return redirect()->route('payments');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $payments = Payment::where('id', 'like', "%$search%")
            ->orwhere('nom', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('status', 'like', "%$search%")
            ->orwhere('montant', 'like', "%$search%")
            ->orwhere('maladie_type', 'like', "%$search%")
            ->orwhere('payment_method', 'like', "%$search%")
            ->paginate(10);

        return view('pages.Payment.Payments')->with('payments', $payments);
    }

    public function pdf($id)
    {
        $payment = Payment::find($id);

        if (!$id)
            return back();

        $pdf = PDF::loadView('pages.Payment.PaymentPdf', compact('payment'));
        return $pdf->download('payment.pdf');
    }
}
