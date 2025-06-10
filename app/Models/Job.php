<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Job extends Model
{
    protected $table = 'job_listings';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'type',
        'short_description',
        'description',
        'requirements',
        'benefits',
        'salary_min',
        'salary_max',
        'salary_currency',
        'experience_level',
        'is_active',
        'expires_at',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'expires_at' => 'date',
        'salary_min' => 'decimal:2',
        'salary_max' => 'decimal:2',
    ];

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($job) {
            if (empty($job->slug)) {
                $job->slug = Str::slug($job->title);
            }
        });
    }

    public function getSalaryRangeAttribute(): string
    {
        if (!$this->salary_min && !$this->salary_max) {
            return 'Competitive';
        }

        if (!$this->salary_max) {
            return "From {$this->salary_currency} " . number_format($this->salary_min);
        }

        if (!$this->salary_min) {
            return "Up to {$this->salary_currency} " . number_format($this->salary_max);
        }

        return "{$this->salary_currency} " . number_format($this->salary_min) . " - " . number_format($this->salary_max);
    }
} 