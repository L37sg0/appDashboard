<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurbinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turbines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('windpark_id');
            $table->text('name');
            $table->text('serial_number');
            $table->text('vendor');
            $table->text('model');
            $table->tinyInteger('power');
            $table->text('owner');
            $table->text('gearbox_vendor');
            $table->text('gearbox_number');
            $table->text('hydraulics_vendor');
            $table->text('hydraulics_number');
            $table->text('transformer_vendor');
            $table->text('transformer_number');
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
        Schema::dropIfExists('turbines');
    }
}
