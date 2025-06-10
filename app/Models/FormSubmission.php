<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_type',
        'name',
        'email',
        'company',
        'phone',
        'service',
        'budget',
        'timeline',
        'message',
        'project_type',
        'newsletter_subscription',
        'additional_data',
    ];

    protected $casts = [
        'additional_data' => 'array',
        'newsletter_subscription' => 'boolean',
    ];

    // Form types
    public const TYPE_CONTACT = 'contact';
    public const TYPE_SERVICE = 'service';
    public const TYPE_NEWSLETTER = 'newsletter';

    public static function getFormTypes(): array
    {
        return [
            self::TYPE_CONTACT => 'Contact Form',
            self::TYPE_SERVICE => 'Service Inquiry',
            self::TYPE_NEWSLETTER => 'Newsletter Subscription',
        ];
    }
} 