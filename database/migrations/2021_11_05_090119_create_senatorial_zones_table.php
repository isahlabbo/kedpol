<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenatorialZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senatorial_zones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('wards')->default(0);
            $table->integer('polling_units')->default(0);
            $table->integer('teams')->default(0);
            $table->integer('members')->default(0);
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
        Schema::dropIfExists('senatorial_zones');
    }
}
