<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PredictionHistory;
use App\Models\User;

class PredictionController extends Controller
{
    public function index()
    {
        $predictions = PredictionHistory::with('user')->get();
        $users = User::all();
        return view('admin.prediction', compact('predictions', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'BMI' => 'required|numeric',
            'Age' => 'required|integer',
            'prediction' => 'required|in:0,1,2',
            'confidence' => 'required|numeric|min:0|max:100',
        ]);

        PredictionHistory::create($validated);

        return redirect()->route('admin.prediction')->with('success', 'Prediction added successfully!');
    }

    public function destroy(PredictionHistory $prediction) // Changed parameter name to match route
    {
        $prediction->delete();

        return redirect()->route('admin.prediction')->with('success', 'Prediction deleted successfully!');
    }
}