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
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('email', 120);
            $table->string('name', 45);
            $table->string('last_name', 45); 
            $table->string('address', 255);
            $table->dateTime('date_reg');
            $table->enum('status', ['A', 'I', 'trash']);
            $table->timestamps();

            $table->foreignId('commune_id')->constrained('id')->on('communes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
