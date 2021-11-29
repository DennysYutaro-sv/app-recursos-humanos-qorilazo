<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string('agency_name');
            $table->string('agency_address');

            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')
                ->references('id')->on('departments');

            $table->unsignedBigInteger('provincia_id');
            $table->foreign('provincia_id')
                ->references('id')->on('provinces');
            
            $table->unsignedBigInteger('distrito_id');
            $table->foreign('distrito_id')
                ->references('id')->on('districts');
            
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
