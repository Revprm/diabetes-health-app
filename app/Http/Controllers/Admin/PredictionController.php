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
}
