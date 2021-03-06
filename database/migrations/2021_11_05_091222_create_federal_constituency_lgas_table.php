<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFederalConstituencyLgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('federal_constituency_lgas', function (Blueprint $table) {
            $table->id();
            $table->integer('lga_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('lgas')
            ->delete('restrict')
            ->update('cascade');
            $table->integer('federal_constituency_id')
            ->unsigned()
            ->nullable()
            ->foreign()
            ->references('id')
            ->on('federal_constituencies')
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
        Schema::dropIfExists('federal_constituency_lgas');
    }
}
