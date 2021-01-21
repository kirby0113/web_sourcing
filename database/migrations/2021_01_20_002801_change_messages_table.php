<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            //
            $table->bigInteger('room_id')->unsigned()->after('Message_id');
            $table->foreign('room_id')
            ->references('Room_id')->on('message_rooms');
            $table->renameColumn('do_user_id','contractor_id');
            $table->renameColumn('from_user_id','client_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('messages', function (Blueprint $table) {
            //
            $table->renameColumn('contractor_id','do_user_id');
            $table->renameColumn('client_id','from_user_id');
        });
    }
}
