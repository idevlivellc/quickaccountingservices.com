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
        Schema::create('quickbooks_query', function (Blueprint $table) {
            $table->id();
            $table->text("name");
            $table->text("email");
            $table->text("phone");
            $table->text("issue");
            $table->text("ip_address");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quickbooks_query');
    }
};
