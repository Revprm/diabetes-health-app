<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredictionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'HighBP',
        'HighChol',
        'BMI',
        'Stroke',
        'HeartDiseaseorAttack',
        'PhysActivity',
        'GenHlth',
        'PhysHlth',
        'DiffWalk',
        'Age',
        'Education',
        'Income',
        'prediction',
        'confidence',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
