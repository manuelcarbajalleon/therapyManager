<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenAndTherapiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->default('');
            $table->string('firstname')->default('');
            $table->string('slug')->default('');
            $table->date('dob');
            $table->string('childid');
            $table->date('servicestartdate');
            $table->date('serviceenddate');
            $table->string('servicecoordinatorname')->default('');
            $table->string('parentcaregivername')->default('');
            $table->string('address')->default('');
            $table->string('zipcode')->default('');
            $table->string('phone')->default('');
            $table->string('frequency')->default('');
            $table->string('document')->default('');
            $table->timestamps();
        });

        Schema::create('therapists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname')->default('');
            $table->string('firstname')->default('');
            $table->string('slug')->default('');
            $table->string('address')->default('');
            $table->string('zipcode')->default('');
            $table->string('phone')->default('');
            $table->timestamps();
        });

        Schema::create('childrentherapists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('childid')->unsigned()->default(0);
            $table->foreign('childid')->references('id')->on('children')->onDelete('cascade');
            $table->integer('therapistid')->unsigned()->default(0);
            $table->foreign('therapistid')->references('id')->on('therapists')->onDelete('cascade');
            $table->date('therapiststartdate');
            $table->timestamps();
        });

        Schema::create('therapies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('therapistchildid')->unsigned()->default(0);
            $table->foreign('therapistchildid')->references('id')->on('childrentherapists')->onDelete('cascade');
            $table->dateTime('therapystartdatetime');
            $table->dateTime('therapyenddatetime');
            $table->boolean('therapystatus');
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
        Schema::drop('therapies');
        Schema::drop('childrentherapists');
        Schema::drop('therapists');
        Schema::drop('children');
    }
}
