<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'job_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'cover_letter',
        'resume_path',
        'portfolio_url',
        'linkedin_url',
        'github_url',
        'additional_information',
        'status',
        'internal_notes',
    ];

    public const STATUSES = [
        'pending' => 'Pending Review',
        'reviewed' => 'Reviewed',
        'shortlisted' => 'Shortlisted',
        'rejected' => 'Rejected',
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }
} 