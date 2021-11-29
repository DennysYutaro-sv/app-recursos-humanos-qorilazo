<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractStatesTable extends Migration
{

    public function up()
    {
        Schema::create('contract_states', function (Blueprint $table) {
            $table->id();

            $table->date('start_contract');
            $table->date('trial_period');
            $table->date('end_contract');

            $table->unsignedBigInteger('contract_id')->nullable();
            $table->foreign('contract_id')->references('id')->on('contracts');

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contract_states');
    }
}
