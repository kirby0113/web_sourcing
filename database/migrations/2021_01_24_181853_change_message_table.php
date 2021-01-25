<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeMessageTable extends Migration
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
            $table->string('made',10);
            $table->bigInteger('contractor_id')->unsigned()->change();
            $table->bigInteger('client_id')->unsigned()->change();

            $table->foreign('contractor_id')
            ->references('Contractor_id')->on('contractors');
            $table->foreign('client_id')
            ->references('Client_id')->on('clients');
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
            $table->dropColumn('made');
        });
    }
}
