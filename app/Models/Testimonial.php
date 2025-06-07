<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'avatar',
        'quote',
        'case_study_id'
    ];

    /**
     * Get the case study that owns this testimonial
     */
    public function caseStudy(): BelongsTo
    {
        return $this->belongsTo(CaseStudy::class);
    }
} 