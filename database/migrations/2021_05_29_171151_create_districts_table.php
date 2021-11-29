<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistrictsTable extends Migration
{
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name_distrito');
            $table->string('cod_ubig');
            $table->unsignedBigInteger('provincia_id');
            $table->foreign('provincia_id')
                ->references('id')->on('provinces')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('districts');
    }
}
