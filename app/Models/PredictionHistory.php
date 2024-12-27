<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PredictionHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'BMI',
        'Age',
        'prediction',
        'confidence',
        'HighBP',
        'HighChol',
        'Stroke',
        'HeartDiseaseorAttack',
        'PhysActivity',
        'DiffWalk',
        'GenHlth',
        'PhysHlth',
        'Education',
        'Income',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
