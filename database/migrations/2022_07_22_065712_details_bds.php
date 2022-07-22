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
        Schema::create('details_bds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lbds_id');
            $table->foreign('lbds_id')->references('id')->on('lbds');
            $table->string('name_bds');
            $table->string('location');
            $table->string('price');
            $table->string('description',1000);
            $table->string('contact');

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
};
