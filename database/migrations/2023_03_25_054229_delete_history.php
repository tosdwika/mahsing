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
        Schema::create('delete_history', function (Blueprint $table) {
            $table->id();

            $table->string('object')->nullable();
            $table->string('source')->nullable();
            $table->text('reason')->nullable();
            $table->string('request_by')->nullable();
            $table->string('approved_by')->nullable();
            $table->integer('deleted_by')->nullable();

            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delete_history');
    }
};
