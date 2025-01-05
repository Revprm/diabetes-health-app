<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\PredictionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PredictionController extends Controller
{
    public function indexAdmin()
    {
        $predictions = PredictionHistory::with('user')->get();
        $users = User::all();
        return view('admin.prediction', compact('predictions', 'users'));
    }

    public function indexUser()
    {
        $authUser = Auth::user();

        $predictions = PredictionHistory::where('user_id', $authUser->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('user.prediction', compact('predictions'));
    }

    public function createAdmin()
    {
        $users = User::all();
        return view('admin.prediction-create', compact('users'));
    }

    public function createUser()
    {
        $authUser = Auth::user();

        return view('user.prediction-create', compact('authUser'));
    }

    public function storeAdmin(Request $request)
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

    public function predictUser(Request $request)
    {
        $requestData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'BMI' => 'required|numeric|min:0|max:100',
            'Age' => 'required|numeric|min:18|max:120',
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

        $requestData['HighBP'] = $requestData['HighBP'] ?? 0;
        $requestData['HighChol'] = $requestData['HighChol'] ?? 0;
        $requestData['Stroke'] = $requestData['Stroke'] ?? 0;
        $requestData['HeartDiseaseorAttack'] = $requestData['HeartDiseaseorAttack'] ?? 0;
        $requestData['PhysActivity'] = $requestData['PhysActivity'] ?? 0;
        $requestData['DiffWalk'] = $requestData['DiffWalk'] ?? 0;


        $client = new Client();
        $url = 'http://127.0.0.1:8080/predict';

        try {
            $response = $client->post($url, [
                'json' => $requestData,
            ]);

            $responseBody = json_decode($response->getBody(), true);

            $predictionHistory = PredictionHistory::create([
                'HighBP' => $requestData['HighBP'],
                'HighChol' => $requestData['HighChol'],
                'BMI' => $requestData['BMI'],
                'Stroke' => $requestData['Stroke'],
                'HeartDiseaseorAttack' => $requestData['HeartDiseaseorAttack'],
                'PhysActivity' => $requestData['PhysActivity'],
                'GenHlth' => $requestData['GenHlth'],
                'PhysHlth' => $requestData['PhysHlth'],
                'DiffWalk' => $requestData['DiffWalk'],
                'Age' => $requestData['Age'],
                'Education' => $requestData['Education'],
                'Income' => $requestData['Income'],
                'prediction' => $responseBody['prediction'],
                'confidence' => $responseBody['confidence'] ?? null,
                'user_id' => Auth::id(),
            ]);

            return redirect()->route('user.predict')->with([
                'status' => 'success',
                'data' => $responseBody,
                'history' => $predictionHistory,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroyAdmin(PredictionHistory $prediction)
    {
        $prediction->delete();

        return redirect()->route('admin.prediction')->with('success', 'Prediction deleted successfully!');
    }
}
