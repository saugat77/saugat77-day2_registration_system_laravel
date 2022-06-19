<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->unique();
            $table->string('password');
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('address');
            $table->string('apt');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip');
            $table->string('phone');
            $table->string('email');
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_last_name')->nullable();
            $table->string('child_first_name')->nullable();
            $table->string('child_last_name')->nullable();
            $table->string('child_age')->nullable();
            $table->string('child_address')->nullable();
            $table->string('child_city')->nullable();
            $table->string('child_state')->nullable();
            $table->string('child_country')->nullable();
            $table->string('child_zip')->nullable();
            $table->bigInteger('status')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('status')->references('id')->on('payment_statuses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
