<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{

    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name_provincia');
            $table->string('cod_ubig');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('departamento_id')
                ->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
