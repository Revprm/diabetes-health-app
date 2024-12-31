<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PredictionHistory;
use App\Models\User;

class MainUserController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch the latest prediction for the authenticated user
        $latestPrediction = PredictionHistory::where('user_id', $user->id)
            ->latest()
            ->first();

        // Fetch recent predictions (limit to 5, ordered by latest first)
        $predictions = PredictionHistory::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $trendData = $this->calculateTrends($user);

        // Pass data to the view
        return view('user.dashboard', [
            'user' => $user,
            'latestPrediction' => $latestPrediction,
            'predictions' => $predictions,
            'trends' => $trendData
        ]);
    }

    private function calculateTrends(User $user): array
    {
        $predictions = $user->predictionHistories()
            ->latest()
            ->take(6)
            ->get();

        if ($predictions->isEmpty()) {
            return [
                'bmi_trend' => null,
                'health_trend' => null,
                'risk_trend' => null
            ];
        }

        // Calculate BMI trend (improving/worsening)
        $bmiTrend = $this->calculateMetricTrend($predictions, 'BMI');

        // Calculate general health trend
        $healthTrend = $this->calculateMetricTrend($predictions, 'GenHlth');

        // Calculate risk trend (percentage of high risk predictions)
        $riskCount = $predictions->where('prediction', 1)->count();
        $riskPercentage = ($riskCount / $predictions->count()) * 100;

        return [
            'bmi_trend' => $bmiTrend,
            'health_trend' => $healthTrend,
            'risk_percentage' => $riskPercentage
        ];
    }

    private function calculateMetricTrend($predictions, string $metric): string
    {
        if ($predictions->count() < 2) {
            return 'stable';
        }

        $latest = $predictions->first()->$metric;
        $previous = $predictions->get(1)->$metric;

        $difference = $latest - $previous;
        $threshold = 0.5; // Minimum difference to consider a change

        if (abs($difference) < $threshold) {
            return 'stable';
        }

        // For GenHlth, lower is better (1-5 scale)
        if ($metric === 'GenHlth') {
            return $difference < 0 ? 'improving' : 'worsening';
        }

        // For BMI, closer to normal range (18.5-24.9) is better
        if ($metric === 'BMI') {
            $normalBMI = 21.7; // Midpoint of normal BMI range
            $currentDistance = abs($latest - $normalBMI);
            $previousDistance = abs($previous - $normalBMI);

            return $currentDistance < $previousDistance ? 'improving' : 'worsening';
        }

        return 'stable';
    }
}
