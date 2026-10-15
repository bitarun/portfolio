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
        'github_url', 'demo_url', 'video_url_en', 'video_url_fa', 'cover_image', 'code_snippet', 'screenshots',
        'order', 'is_featured',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'highlights_fa' => 'array',
        'highlights_en' => 'array',
        'screenshots' => 'array',
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

    public function getCoverShotAttribute(): ?string
    {
        $shots = $this->screenshots ?? [];
        return $shots[0] ?? null;
    }

    /**
     * Demo video URL for the current locale, falling back to the other language.
     */
    public function getVideoUrlAttribute(): ?string
    {
        $fa = $this->video_url_fa ?: null;
        $en = $this->video_url_en ?: null;

        return app()->getLocale() === 'fa' ? ($fa ?? $en) : ($en ?? $fa);
    }

    /**
     * Embeddable player URL for YouTube and Aparat links; null for anything else
     * (the page then only shows a plain "watch" link).
     */
    public function getVideoEmbedUrlAttribute(): ?string
    {
        $url = $this->video_url;

        if (! $url) {
            return null;
        }

        if (preg_match('~(?:youtube\.com/watch\?(?:.*&)?v=|youtu\.be/|youtube\.com/embed/)([A-Za-z0-9_-]{11})~', $url, $m)) {
            return 'https://www.youtube-nocookie.com/embed/' . $m[1];
        }

        if (preg_match('~aparat\.com/v/([A-Za-z0-9]+)~', $url, $m)) {
            return 'https://www.aparat.com/video/video/embed/videohash/' . $m[1] . '/vt/frame';
        }

        return null;
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
