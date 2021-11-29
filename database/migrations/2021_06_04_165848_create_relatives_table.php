<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelativesTable extends Migration
{
    public function up()
    {
        Schema::create('relatives', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dni');
            $table->string('relationship');
            $table->date('birth_date');
            $table->string('document')->nullable();

            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('relatives');
    }
}
