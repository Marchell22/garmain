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
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->string('bpkb')->nullable()->after('kk');
            $table->string('slipGaji')->nullable()->after('bpkb');
        });
    }

    public function down(): void
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->dropColumn('bpkb');
            $table->dropColumn('slipGaji');
        });
    }
};
