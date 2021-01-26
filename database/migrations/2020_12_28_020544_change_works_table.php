<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('works', function (Blueprint $table) {
            //
            $table->bigInteger('Client_id')->unsigned()->change();
            $table->foreign('Client_id')
            ->references('Client_id')->on('clients');

            $table->bigInteger('Contractor_id')->unsigned()->change();
            $table->foreign('Contractor_id')
            ->references('Contractor_id')->on('contractors');

            $table->bigInteger('Category_id')->unsigned()->change();
            $table->foreign('Category_id')
            ->references('Category_id')->on('categories');

            $table->boolean('finished')->default(false);
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
          //  $table->dropColumn('finished');
        });
    }
}
