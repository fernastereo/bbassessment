<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('name');
            $table->string('zone_type');
            $table->unsignedBigInteger('settlementtype_id');
            $table->unsignedBigInteger('zipcode_id');
            $table->timestamps();
            $table->foreign('settlementtype_id')->references('id')->on('settlementtypes');
            $table->foreign('zipcode_id')->references('id')->on('zipcodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settlements');
    }
}
