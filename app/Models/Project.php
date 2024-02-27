<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Orbit\Concerns\Orbital;

class Project extends Model
{
    use HasFactory, Orbital;

    public static function schema(Blueprint $table)
    {
        $table->string('name');
        $table->string('slug')->unique();
        $table->string('logo');
        $table->string('link');
        $table->string('summary');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
