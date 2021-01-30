<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeWorkMessageRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->dropForeign('works_Contractor_id_foreign');
            //
            $table->dropColumn('Contractor_id');
        });

        Schema::table('message_rooms', function (Blueprint $table) {
            //
            $table->bigInteger('contractor_id')->unsigned()->after(('work_id'));
            $table->foreign('contractor_id')
            ->references('Contractor_id')->on('contractors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('works', function (Blueprint $table) {
            //
           // $table->bigInteger('Contractor_id')->unsigned();
            //$table->foreign('Contractor_id')
           // ->references('Contractor_id')->on('contractors');
        });

        Schema::table('message_rooms', function (Blueprint $table) {
            //
           // $table->dropForeign('message_rooms_contractor_id_foreign');
           // $table->dropColumn('contractor_id');
        });
    }
}
