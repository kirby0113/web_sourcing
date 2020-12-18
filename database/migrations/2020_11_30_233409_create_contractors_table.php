<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->bigIncrements('Contractor_id');
            $table->string('Name',20);
            $table->string('Nickname',20);
            $table->date('Birthday');
            $table->string('email',255);
            $table->longText('Appealpoint');
            $table->string('password');
            $table->longText('photo_url')->nullable($value=true);
            $table->tinyInteger('category_id');
            $table->rememberToken();
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
        Schema::dropIfExists('contractors');
    }
}
