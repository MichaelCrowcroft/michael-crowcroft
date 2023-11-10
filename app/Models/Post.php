<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Post extends Model
{
    use HasFactory, Orbital;

    public static function schema(Blueprint $table)
    {
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('category');
        $table->date('published_at')->nullable();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
