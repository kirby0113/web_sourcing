<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories',function(Blueprint $table){
            $table->bigIncrements('Category_id')->unsigned()->change();
        });  
        Schema::table('contractors', function (Blueprint $table) {
            //
            $table->string('Name',100)->change();
            $table->string('NickName',100)->change();
            $table->bigInteger('category_id')->unsigned()->change();
            $table->foreign('category_id')
            ->references('Category_id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contractors', function (Blueprint $table) {
            //
        });
    }
}
