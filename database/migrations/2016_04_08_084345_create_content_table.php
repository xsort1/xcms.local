<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function($t){
            $t->increments('id');
            $t->string('name_ru', 200);
            $t->string('name_en', 200);
            $t->string('name_ro', 200);
            $t->text('description_ru');
            $t->text('description_en');
            $t->text('description_ro');
            $t->boolean('enabled');
            $t->integer('views');
            $t->string('meta_description', 200);
            $t->string('meta_keywords', 200);
            $t->string('slug', 200);
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
