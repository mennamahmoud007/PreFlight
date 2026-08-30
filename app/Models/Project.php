<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    protected $fillable = [
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
    public function pitchSections(): HasMany
    {
        return $this->hasMany(PitchSection::class);
    }
}
