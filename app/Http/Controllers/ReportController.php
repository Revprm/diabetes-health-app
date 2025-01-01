<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        return view('user.support');
    }

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $data['user_id'] = Auth::user()->id;
        Report::create($data);
        return redirect()->route('user.support');
    }

    public function show($id)
    {
        $report = Report::findOrFail($id);
        return view('support.show', compact('report'));
    }
}
