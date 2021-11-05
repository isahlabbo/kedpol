<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenetorialZoneLgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senetorial_zone_lgas', function (Blueprint $table) {
            $table->id();
            $table->integer('lga_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lgas')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('senetorial_zone_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('senetorial_zones')
            ->delete('restrict')
            ->update('cascade');
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
        Schema::dropIfExists('senetorial_zone_lgas');
    }
}
