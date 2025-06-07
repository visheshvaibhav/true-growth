<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CaseStudy extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'timeframe',
        'roi',
        'team_size',
        'completion_date',
        'overview',
        'client_description',
        'challenge',
        'solution',
        'detailed_results'
    ];

    /**
     * Get the technologies used in this case study
     */
    public function technologies(): HasMany
    {
        return $this->hasMany(Technology::class);
    }

    /**
     * Get the process steps for this case study
     */
    public function processSteps(): HasMany
    {
        return $this->hasMany(ProcessStep::class)->orderBy('order');
    }

    /**
     * Get the key metrics for this case study
     */
    public function keyMetrics(): HasMany
    {
        return $this->hasMany(KeyMetric::class);
    }

    /**
     * Get the testimonial for this case study
     */
    public function testimonial(): HasOne
    {
        return $this->hasOne(Testimonial::class);
    }

    /**
     * Get related projects
     */
    public function relatedProjects(): HasMany
    {
        return $this->hasMany(CaseStudy::class, 'related_to_id');
    }
} 