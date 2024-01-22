<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indexpages', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('logo_index')->nullable();
            $table->string('email')->nullable();
            $table->string('tel_one')->nullable();
            $table->string('tel_two')->nullable();
            $table->string('menu_one')->nullable();
            $table->string('menu_btn')->nullable();
            $table->string('submenu_one')->nullable();
            $table->string('submenu_two')->nullable();
            $table->string('submenu_three')->nullable();
            $table->string('submenu_four')->nullable();
            $table->string('submenu_five')->nullable();
            $table->string('insta')->nullable();
            $table->string('slider_title')->nullable();
            $table->string('slider_content')->nullable();
            $table->string('slider_btn')->nullable();
            $table->string('slider_photo_one')->nullable();
            $table->string('slider_photo_two')->nullable();
            $table->string('slider_photo_three')->nullable();
            $table->string('description_one_bolder')->nullable();
            $table->string('description_one_text')->nullable();
            $table->string('description_two_bolder')->nullable();
            $table->string('description_two_text')->nullable();
            $table->string('description_three_bolder')->nullable();
            $table->string('description_three_text')->nullable();
            $table->string('description_four_bolder')->nullable();
            $table->string('description_four_text')->nullable();
            $table->string('description_photo_left')->nullable();
            $table->string('description_photo_right')->nullable();
            $table->string('description_title')->nullable();
            $table->string('description_subtitle')->nullable();
            $table->string('description_text')->nullable();
            $table->string('description_btn')->nullable();
            $table->string('about_title')->nullable();
            $table->string('about_paragraph_one')->nullable();
            $table->string('about_paragraph_two')->nullable();
            $table->string('about_paragraph_two_bolder')->nullable();
            $table->string('about_photo')->nullable();
            $table->string('about_footer_title')->nullable();
            $table->string('about_footer_paragraph_one')->nullable();
            $table->string('about_footer_paragraph_two')->nullable();
            $table->string('about_footer_paragraph_btn')->nullable();
            $table->string('about_footer_btn')->nullable();
            $table->string('about_footer_photo')->nullable();
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indexpages');
    }
}
