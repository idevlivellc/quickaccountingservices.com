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
        Schema::create('call_to_action', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")->constrained("posts")->onDelete("cascade");
            $table->text("cta_header");
            $table->text("cta_body");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('call_to_action');
    }
};
