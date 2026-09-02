<?php

namespace App\Models;

use Database\Factories\ImprovementFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Improvement extends Model
{
    /** @use HasFactory<ImprovementFactory> */
    use HasFactory;

    protected $fillable = [
        'project_id',
        'weakness',
        'opportunity',
        'why_it_matters',
        'suggested_action',
        'status',
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
