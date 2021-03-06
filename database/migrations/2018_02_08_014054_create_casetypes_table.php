<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasetypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casetypes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->foreign('casetobehandleds_id')->references('id')->on('casetobehandleds')->onDelete('cascade');
            $table->integer('casetobehandleds_id')->unsigned();
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
        Schema::dropIfExists('casetypes');
    }
}
