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
        Schema::create('attendings', function (Blueprint $table) {
            $table->id();

            // Make sure the data type of user_id matches the data type of the referenced column
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();

            // Make sure the data type of event_id matches the data type of the referenced column
            $table->foreignId("event_id")->constrained()->cascadeOnDelete();

            $table->integer("num_tickets");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendings');
    }
};
