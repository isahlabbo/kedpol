<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenatorialZoneLgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senatorial_zone_lgas', function (Blueprint $table) {
            $table->id();
            $table->integer('lga_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lgas')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('senatorial_zone_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('senetorial_zones')
            ->delete('restrict')
            ->update('cascade');
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
        Schema::dropIfExists('senatorial_zone_lgas');
    }
}
