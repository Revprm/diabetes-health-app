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

    public function store(){
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
        return view('support.show', compact('report'));
    }
}
