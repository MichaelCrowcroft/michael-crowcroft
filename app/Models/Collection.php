<?php

namespace App\Models;

use Carbon\Carbon;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function path(): string
    {
        return "/collections/{$this->slug}";
    }

    public function formattedDate(): string
    {
        return Carbon::parse($this->created_at)->format('F d\\, Y');
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}