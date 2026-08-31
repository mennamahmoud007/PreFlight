<?php

namespace App\Models;

use Database\Factories\AnalysisFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Analysis extends Model
{
    /**
     * @use HasFactory<AnalysisFactory>
     */
    use HasFactory;

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

    /**
     * @return BelongsTo<Project, $this>
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
