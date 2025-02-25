<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('barangays', function (Blueprint $table) {
            $table->id();
            $table->foreignId('municipality_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('population');
            $table->string('image')->nullable();
            $table->text('culture')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('barangays');
    }
};
