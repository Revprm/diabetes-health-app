<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\PredictionHistory;
use Illuminate\Support\Facades\Auth;

class UserPredictionController extends Controller
{
    public function index()
    {
        $authUser = Auth::user();
    
        $predictions = PredictionHistory::where('user_id', $authUser->id)->get();
    
        return view('user.prediction', compact('authUser', 'predictions'));
    }
    
    
    
    public function predict(Request $request)
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

        $client = new Client();
        $url = 'http://127.0.0.1:8080/predict';

        try {
            // Send the API request
            $response = $client->post($url, [
                'json' => $requestData,
            ]);

            $responseBody = json_decode($response->getBody(), true);

            // Insert the data into the database
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

            return response()->json([
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
}
