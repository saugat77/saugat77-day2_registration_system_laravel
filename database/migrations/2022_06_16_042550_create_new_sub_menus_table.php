<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_sub_menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('side_bar_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('side_bar_id')->references('id')->on('side_bars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_sub_menus');
    }
}
