<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_rooms', function (Blueprint $table) {
            $table->bigIncrements('Room_id');
            $table->bigInteger('work_id')->unsigned();
            $table->timestamps();
            $table->boolean('finished')->default(false);
            $table->foreign('work_id')
            ->references('Work_id')->on('works');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
        Schema::dropIfExists('message_rooms');
    }
}
