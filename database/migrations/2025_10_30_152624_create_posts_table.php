<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('topic');
            $table->string('title');
            $table->text('description');
            $table->text('image');
            $table->text('content');
            $table->enum('category', ['bookkeeping', 'accounting', 'qb-consultation', 'qb-bookkeeping']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
