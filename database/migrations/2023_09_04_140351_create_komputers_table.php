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
        Schema::create('komputers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('computer_name');
            $table->enum('on_off_condition', ['menyala', 'mati']);
            $table->string('on_off_desc');
            $table->string('uninstalled_app');
            $table->string('uninstalled_app_desc');
            $table->enum('clean_file_status', ['hapus', 'tidak hapus']);
            $table->string('clean_file_desc');
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
        Schema::dropIfExists('komputers');
    }
};
