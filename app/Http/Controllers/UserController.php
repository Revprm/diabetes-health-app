<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PredictionHistory;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function indexAdmin()
    {
        $users = User::all();
        return view('admin.userManagement', compact('users'));
    }

    public function storeAdmin(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'is_admin' => 'nullable|boolean',
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_admin' => $validated['is_admin'],
        ]);

        return redirect()->route('admin.userManagement')
            ->with('success', 'User created successfully');
    }

    public function updateAdmin(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'password_confirmation' => 'nullable',
            'is_admin' => 'nullable|boolean',
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validated['password']);
        }

        $user->is_admin = $validated['is_admin'];
        $user->save();

        return redirect()->route('admin.userManagement')
            ->with('success', 'User updated successfully');
    }

    public function destroyAdmin(User $user)
    {
        if (Auth::id() === $user->id) {
            return redirect()->route('admin.userManagement')
                ->with('error', 'You cannot delete your own account');
        }

        $user->delete();

        return redirect()->route('admin.userManagement')
            ->with('success', 'User deleted successfully');
    }

    public function indexUser()
    {
        $user = Auth::user();

        $latestPrediction = PredictionHistory::where('user_id', $user->id)
            ->latest()
            ->first();

        $predictions = PredictionHistory::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $trendData = $this->calculateTrendsUser($user);

        // Pass data to the view
        return view('user.dashboard', [
            'user' => $user,
            'latestPrediction' => $latestPrediction,
            'predictions' => $predictions,
            'trends' => $trendData
        ]);
    }

    private function calculateTrendsUser(User $user): array
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

        $bmiTrend = $this->calculateMetricTrendUser($predictions, 'BMI');
        $healthTrend = $this->calculateMetricTrendUser($predictions, 'GenHlth');

        $riskCount = $predictions->where('prediction', 1)->count();
        $riskPercentage = ($riskCount / $predictions->count()) * 100;

        return [
            'bmi_trend' => $bmiTrend,
            'health_trend' => $healthTrend,
            'risk_percentage' => $riskPercentage
        ];
    }

    private function calculateMetricTrendUser($predictions, string $metric): string
    {
        if ($predictions->count() < 2) {
            return 'stable';
        }

        $latest = $predictions->first()->$metric;
        $previous = $predictions->get(1)->$metric;

        $difference = $latest - $previous;
        $threshold = 0.5;

        if (abs($difference) < $threshold) {
            return 'stable';
        }

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
