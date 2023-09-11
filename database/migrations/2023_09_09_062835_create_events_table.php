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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('eventType_id');
            $table->string('main_image');
            $table->string('discription');
            $table->string('status');
            $table->string('price');
            $table->string('totaltickets');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('time');
            $table->foreign('eventType_id')->references('id')->on('event_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
