<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('news', function($t){
			$t->increments('id');
			$t->string('name', 200);
			$t->text('description');
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
        Schema::drop('news');
    }
}
