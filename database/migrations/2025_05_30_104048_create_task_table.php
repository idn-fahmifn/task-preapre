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
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->constrained('team')->cascadeOnDelete();
            $table->string('judul_task')->unique();
            $table->text('deskripsi');
            $table->date('tanggal_mulai');
            $table->date('target_selesai');
            $table->enum('status', ['pending', 'berjalan', 'selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
