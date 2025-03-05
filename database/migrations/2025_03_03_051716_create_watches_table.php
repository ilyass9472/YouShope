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
        Schema::create('watches', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('reference')->unique();
            $table->string('collection');
            $table->decimal('price', 10, 2);
            $table->text('description');
            $table->text('features')->nullable();
            $table->boolean('is_limited')->default(false);
            $table->integer('limited_pieces')->nullable();
            $table->string('photo');
            $table->text('additional_photos')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watches');
    }
};