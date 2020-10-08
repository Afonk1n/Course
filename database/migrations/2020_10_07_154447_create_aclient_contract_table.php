<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAclientContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aclient_contract', function (Blueprint $table) {
            $table->foreignId('aclient_id')->constrained('aclients')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('contract_id')->constrained('contracts')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aclient_contract');
    }
}
