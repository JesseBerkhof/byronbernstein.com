<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetitionsTable extends Migration
{
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('message')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('petitions');
    }
}
