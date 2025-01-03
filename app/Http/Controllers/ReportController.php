<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $reports = Report::where('user_id', $user->id)->paginate(5);

        return view('user.support', compact('reports'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $data['user_id'] = Auth::user()->id;
        Report::create($data);
        return redirect()->route('support.index');
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('admin.support.show', compact('report'));
    }

    public function indexAdmin()
    {

        $reports = Report::latest()->paginate(5);

        return view('admin.support.index', compact('reports'));
    }
    
    public function respond(Report $report, Request $request)
    {
        if($report->resolved) {
            return redirect()
                ->route('admin.support', $report)
                ->with('error', 'This report has already been resolved.');
        }

        if(!Auth::user()->is_admin){
            return redirect()
                ->route('/', $report)
                ->with('error', 'You do not have permission to respond to this report.');
        }

        $validated = $request->validate([
            'response' => 'required|string',
        ]);

        $report->update([
            'response' => $validated['response'],
            'resolved' => true,
            'resolved_at' => now(),
        ]);

        return redirect()
            ->route('admin.support', $report)
            ->with('success', 'Response sent successfully.');
    }
}
