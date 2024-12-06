<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Event Name
            $table->date('date');   // Event Date
            $table->time('time');   // Event Time
            $table->string('location'); // Event Location
            $table->string('status')->default('Not Published');
            $table->string('image_path')->nullable();
            $table->string('description')->nullable(); // Event Status with default value
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
