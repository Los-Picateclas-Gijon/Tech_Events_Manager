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
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->string('date');
            $table->string('hour');
            $table->integer('current_capacity')->default(0);
            $table->integer('max_capacity');
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            $table->foreign('location_id')->references('id')->on('locations')->cascadeOnDelete();
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
