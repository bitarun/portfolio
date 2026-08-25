<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title_fa', 'title_en',
        'summary_fa', 'summary_en',
        'description_fa', 'description_en',
        'category',
        'tech_stack',
        'highlights_fa', 'highlights_en',
        'github_url', 'demo_url', 'cover_image', 'code_snippet',
        'order', 'is_featured',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'highlights_fa' => 'array',
        'highlights_en' => 'array',
        'is_featured' => 'boolean',
    ];

    public function getTitleAttribute(): string
    {
        return $this->localized('title');
    }

    public function getSummaryAttribute(): string
    {
        return $this->localized('summary');
    }

    public function getDescriptionAttribute(): string
    {
        return $this->localized('description');
    }

    public function getHighlightsAttribute(): array
    {
        return $this->localized('highlights');
    }

    public function scopeCategory(Builder $query, string $category): Builder
    {
        return $query->where('category', $category);
    }

    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

    private function localized($field): mixed
    {
        $fa = $field . '_fa';
        $en = $field . '_en';
        return app()->getLocale() === 'fa' ? $this->$fa : $this->$en;
    }
}
