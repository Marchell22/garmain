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
        Schema::create('kredits', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('alamat');
            $table->string('noKTP');
            $table->string('jenisBarang');
            $table->string('merkBarang');
            $table->string('tipeBarang');
            $table->decimal('hargaBarang', 15, 2);
            $table->timestamps();
        });
        Schema::create('file_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('fileName');
            $table->string('filePath');
            $table->string('ownerName');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_uploads');
        Schema::dropIfExists('kredits');
    }
};
