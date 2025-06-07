<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeyMetric extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'label',
        'case_study_id'
    ];

    /**
     * Get the case study that owns this key metric
     */
    public function caseStudy(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }
} 