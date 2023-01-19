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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('suffix');
            $table->date('birthdate');
            $table->string('birthplace');
            $table->string('gender');
            $table->string('age');
            $table->string('citizenship');
            $table->string('unit');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');
            $table->string('zipcode');
            $table->string('email')->unique();
            $table->string('cell');
            $table->string('telenum');
            $table->string('last_attended');
            $table->string('school_addr');
            $table->string('track');
            $table->string('year_grad');
            $table->string('campus');
            $table->string('dept');
            $table->string('choice');
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
        Schema::dropIfExists('records');
    }
};
