<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('windparks', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('turbines', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('substations', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('outlets', function (Blueprint $table) {
            $table->softDeletes();
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
}
