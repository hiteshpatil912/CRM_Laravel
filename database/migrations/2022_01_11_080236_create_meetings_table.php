<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('dateFrom')->format('d-m-y');
            $table->time('timeFrom');
            $table->date('dateTo')->format('d-m-y');
            $table->time('timeTo');
            $table->string('timeZone');
            $table->string('location');
            $table->string('description');
            $table->string('outCome');
            $table->string('meetingNotes');
            $table->string('relatedTo');
            $table->string('attendees');
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
        Schema::dropIfExists('meetings');
    }
}
