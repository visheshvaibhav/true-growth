<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProcessStep extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'order',
        'case_study_id'
    ];

    /**
     * Get the case study that owns this process step
     */
    public function caseStudy(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }
} 