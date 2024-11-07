<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');      // Stores the name of the event
            $table->string('volunteer_name');  // Stores the volunteer's name
            $table->string('role');            // Stores the volunteer's role
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
