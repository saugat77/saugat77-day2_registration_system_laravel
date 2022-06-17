<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
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
            $table->string('sfn')->nullable();
            $table->string('sln')->nullable();
            $table->string('cfn')->nullable();
            $table->string('cln')->nullable();
            $table->string('cage')->nullable();
            $table->string('caddress')->nullable();
            $table->string('ccity')->nullable();
            $table->string('cstate')->nullable();
            $table->string('ccountry')->nullable();
            $table->string('czip')->nullable();
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
        Schema::dropIfExists('members');
    }
}
