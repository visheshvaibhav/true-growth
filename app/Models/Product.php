<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'file_path',
        'original_filename',
        'file_size',
        'mime_type'
    ];

    /**
     * Get the formatted file size.
     *
     * @return string
     */
    public function getFormattedFileSizeAttribute()
    {
        if (!$this->file_size) {
            return '';
        }

        $size = (int) $this->file_size;
        $base = log($size, 1024);
        $suffixes = ['B', 'KB', 'MB', 'GB', 'TB'];

        return round(pow(1024, $base - floor($base)), 2) . ' ' . $suffixes[floor($base)];
    }

    /**
     * Check if the product has a valid file attached.
     *
     * @return bool
     */
    public function hasValidFile()
    {
        return $this->file_path && Storage::exists('products/' . $this->file_path);
    }

    /**
     * Get the full storage path of the file.
     *
     * @return string|null
     */
    public function getFullFilePath()
    {
        return $this->hasValidFile() ? storage_path('app/products/' . $this->file_path) : null;
    }
} 