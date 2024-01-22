<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorpodocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corpodocentes', function (Blueprint $table) {
            $table->id();
            $table->string('office')->nullable();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('perfil_photo')->nullable();
            $table->string('paragraph_one')->nullable();
            $table->string('paragraph_two')->nullable();
            $table->string('paragraph_three')->nullable();
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
        Schema::dropIfExists('corpodocentes');
    }
}
