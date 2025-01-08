<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function calculate(){
        $weight = request('weight');
        $height = request('height');
        $bmi = $weight / ($height * $height);
        return view('tools.bmiIndex', compact('bmi', 'weight', 'height'));
    }
}
