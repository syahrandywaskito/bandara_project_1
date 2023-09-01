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
        Schema::create('fids', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('monitor_name');
            $table->enum('monitor_view', ['V', 'X']);
            $table->string('view_desc');
            $table->enum('clean_condition', ['V', 'X']);
            $table->string('condition_desc');
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
        Schema::dropIfExists('fids');
    }
};
