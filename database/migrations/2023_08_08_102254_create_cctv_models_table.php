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
        Schema::create('cctv_models', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('hardware_name');
            $table->enum('record_status', ['B', 'S', 'T']);
            $table->string('record_desc');
            $table->enum('clean_status', ['B', 'S', 'T']);
            $table->string('clean_desc');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cctv_models');
    }
};
