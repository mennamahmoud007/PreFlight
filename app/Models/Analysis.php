<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Analysis extends Model
{
    protected $fillable = [
        'project_id',
        'problem_score',
        'target_score',
        'value_score',
        'feasability_score',
        'differentiation_score',
        'overall_score',
        'summary',
        'strengths',
        'weaknesses',
        'risks',
        'critical_questions',
        'improvements',
    ];

    protected $casts = [
        'strengths' => 'array',
        'weaknesses' => 'array',
        'risks' => 'array',
        'critical_questions' => 'array',
        'improvements' => 'array',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
