<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('Request_id');
            $table->bigInteger('work_id')->unsigned();
            $table->bigInteger('contractor_id')->unsigned();
            $table->string('contents');
            $table->timestamps();

            $table->foreign('work_id')
            ->references('Work_id')->on('works');
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
        Schema::dropIfExists('requests');
    }
}
