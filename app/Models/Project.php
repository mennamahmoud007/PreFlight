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
    
     
    public function analysis(): HasOne
    {
        return $this->hasOne(Analysis::class);
    }

    public function pitchSections(): HasMany
    {
        return $this->hasMany(PitchSection::class);
    }
        
        
}