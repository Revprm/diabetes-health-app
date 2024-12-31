<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
