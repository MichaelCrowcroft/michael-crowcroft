<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \Orbit\Concerns\Orbital;

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->date('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
