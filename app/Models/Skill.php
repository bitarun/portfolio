<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_fa', 'name_en',
        'category',
        'note_fa', 'note_en',
        'url',
        'order',
    ];

    public function getNameAttribute(): string
    {
        return $this->localized('name');
    }

    public function getNoteAttribute(): ?string
    {
        return $this->localized('note');
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
