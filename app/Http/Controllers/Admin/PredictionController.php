<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PredictionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class PredictionController extends Controller
{
    public function index()
    {
        $predictions = PredictionHistory::with('user')->get();
        $users = User::all();
        return view('admin.prediction', compact('predictions', 'users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.prediction-create', compact('users'));
    }

    public function store(Request $request)
    {


        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'BMI' => 'required|numeric|min:0|max:100',
            'Age' => 'required|numeric|min:18|max:120',
            'prediction' => 'required|in:0,1,2',
            'confidence' => 'required|numeric|min:0|max:100',
            'HighBP' => 'nullable|boolean',
            'HighChol' => 'nullable|boolean',
            'Stroke' => 'nullable|boolean',
            'HeartDiseaseorAttack' => 'nullable|boolean',
            'PhysActivity' => 'nullable|boolean',
            'DiffWalk' => 'nullable|boolean',
            'GenHlth' => 'required|in:1,2,3,4,5',
            'PhysHlth' => 'required|numeric|min:0|max:100',
            'Education' => 'required|in:1,2,3,4,5,6',
            'Income' => 'required|in:1,2,3,4,5,6,7,8',
        ]);

        $prediction = new PredictionHistory([
            'user_id' => $validated['user_id'],
            'BMI' => $validated['BMI'],
            'Age' => $validated['Age'],
            'prediction' => $validated['prediction'],
            'confidence' => $validated['confidence'],
            'HighBP' => $validated['HighBP'] ?? 0,
            'HighChol' => $validated['HighChol'] ?? 0,
            'Stroke' => $validated['Stroke'] ?? 0,
            'HeartDiseaseorAttack' => $validated['HeartDiseaseorAttack'] ?? 0,
            'PhysActivity' => $validated['PhysActivity'] ?? 0,
            'DiffWalk' => $validated['DiffWalk'] ?? 0,
            'GenHlth' => $validated['GenHlth'],
            'PhysHlth' => $validated['PhysHlth'],
            'Education' => $validated['Education'],
            'Income' => $validated['Income'],
        ]);

        $prediction->save();


        return redirect()->route('admin.prediction')->with('success', 'Prediction created successfully!');
    }

    public function destroy(PredictionHistory $prediction)
    {
        $prediction->delete();

        return redirect()->route('admin.prediction')->with('success', 'Prediction deleted successfully!');
    }
}
