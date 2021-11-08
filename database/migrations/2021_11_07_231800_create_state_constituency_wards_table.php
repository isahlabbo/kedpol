<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateConstituencyWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_constituency_wards', function (Blueprint $table) {
            $table->id();
            $table->integer('state_constituency_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('state_constituencies')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('ward_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('wards')
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
        Schema::dropIfExists('state_constituency_wards');
    }
}
