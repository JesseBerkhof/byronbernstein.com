<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeartsTable extends Migration
{
    public function up(): void
    {
        Schema::create('hearts', static function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hearts');
    }
}
