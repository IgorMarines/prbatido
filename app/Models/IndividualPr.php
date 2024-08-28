<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualPr extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercise_id',
        'weight',
        'reps',
        'sets',
        'date',
    ];

    public function exercises()
    {
        return $this->belongsTo(exercises::class);
    }
}

