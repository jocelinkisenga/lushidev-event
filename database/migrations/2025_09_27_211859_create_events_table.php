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
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("venue_id")->constrained()->cascadeOnDelete();
            $table->string("type_event");
            $table->string("title");
            $table->text("description")->nullable();
            $table->dateTime("starts_at");
            $table->dateTime("ends_at");
            $table->boolean("approuved")->default(false);
            $table->boolean("completed")->default(false);
            $table->bigInteger("attendance")->nullable();
            $table->string("image")->nullable();
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
