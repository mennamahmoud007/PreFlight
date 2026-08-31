<?php

namespace App\Models;

use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    /**
     * @use HasFactory<ProjectFactory>
     */
    use HasFactory;

    protected $fillable = [
        'device_id',
        'name',
        'description',
        'target_audience',
        'industry',
        'status',
    ];

    /**
     * @return HasOne<Analysis, $this>
     */
    public function analysis(): HasOne
    {
        return $this->hasOne(Analysis::class);
    }

    /**
     * @return HasMany<PitchSection, $this>
     */
    public function pitchSection(): HasMany
    {
        return $this->hasMany(PitchSection::class);
    }
}
