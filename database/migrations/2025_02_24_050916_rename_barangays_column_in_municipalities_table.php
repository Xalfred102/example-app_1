<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->renameColumn('barangays', 'barangay_count'); // Rename to avoid conflict
        });
    }

    public function down(): void {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->renameColumn('barangay_count', 'barangays');
        });
    }
};

