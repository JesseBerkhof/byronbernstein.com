<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('city');
            $table->unsignedInteger('province_id');
            $table->string('postal_code')->max('6');
            $table->unsignedInteger('webshop_id');
            $table->text('description')->max('280')->nullable();
            $table->timestamps();

            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('webshop_id')->references('id')->on('webshops');
        });
    }

    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
