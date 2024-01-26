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
        Schema::create('_fumetti', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('casaEditrice');
            $table->string('autore');
            $table->string('copertina');
            $table->date('anno');
            $table->boolean('oscar');
            $table->string('genere');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_fumetti');
    }
};
