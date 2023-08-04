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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_number')->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('series');
            $table->string('type');
            $table->integer('tonnage');
            $table->string('machine_number')->unique();
            $table->string('chasis_number')->unique();
            $table->foreignId('driver_id')->nullable();
            $table->string('status');
            $table->foreignId('created_by')->nullable();
            $table->foreignId('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
