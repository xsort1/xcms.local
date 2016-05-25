<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesXref extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_xref', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->integer('child_id');
        });
        Schema::table('categories_xref', function(Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('categories')
                ->onDelete('restrict');
                ->onUpdate('restrict');
        });
        Schema::table('categories_xref', function(Blueprint $table) {
            $table->foreign('child_id')->references('id')->on('categories')
                ->onDelete('restrict');
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       	Schema::table('categories_xref', function(Blueprint $table) {
            $table->dropForeign('categories_xref_parent_id_foreign');
        });

        Schema::table('categories_xref', function(Blueprint $table) {
            $table->dropForeign('categories_xref_child_id_foreign');
        });
        Schema::drop('categories_xref');
    }
}
