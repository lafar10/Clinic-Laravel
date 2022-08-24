<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Alert;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.Report.Reports', compact('reports'));
    }

    public function create()
    {
        return view('pages.Report.AddReport');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'date_creation' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $Report = Report::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'date_creation' => $request->input('date_creation'),
            'content' => $request->input('content'),
            'content2' => $request->input('content2'),
            'content3' => $request->input('content3'),
            'content4' => $request->input('content4'),
            'content5' => $request->input('content5'),
            'letter' => $request->input('letter'),
        ]);

        alert()->success('success', 'Report Created With Success ^+^');
        return redirect()->route('reports');
    }

    public function delete(Request $request)
    {
        $report = Report::find($request->input('report_id'));

        if (!$report) {
            return back();
        }

        $report->delete();

        alert()->success('success', 'Report Deleted With Success ^+^');
        return redirect()->back();
    }

    public function edit($id)
    {
        $reports = Report::find($id);

        if (!$reports)
            return back();


        return view('pages.Report.UpdateReport')->with('reports', $reports);
    }

    public function update(Request $request)
    {
        $report = Report::find($request->input('report_id'));

        if (!$report)
            return back();

        $report->update($request->all());

        toast('Report Updated With Success ^+^', 'success');
        return redirect()->route('reports');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $reports = Report::where('id', 'like', "%$search%")
            ->orwhere('nom', 'like', "%$search%")
            ->orwhere('prenom', 'like', "%$search%")
            ->orwhere('date_creation', 'like', "%$search%")
            ->orwhere('content', 'like', "%$search%")
            ->orwhere('letter', 'like', "%$search%")
            ->paginate(5);

        return view('pages.Report.reports')->with('reports', $reports);
    }

    public function pdf($id)
    {
        $reports = Report::find($id);

        if (!$id)
            return back();

        $pdf = PDF::loadView('pages.Report.Report', compact('reports'));
        return $pdf->download('report.pdf');
    }
}
