<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('population');
            $table->integer('barangays');
            $table->string('image')->nullable();
            $table->string('culture_image')->nullable();
            $table->text('culture')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('municipalities');
    }
};
