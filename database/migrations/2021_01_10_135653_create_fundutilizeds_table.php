<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundutilizedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundutilizeds', function (Blueprint $table) {
            $table->bigIncrements('Tr_No');
            $table->integer('user_id');
            $table->string('date');
            $table->string('fund_type');
            $table->string('utilize_type');
            $table->string('description');
            $table->string('currency');
            $table->string('amount');
            $table->string('status')->default(1);
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
        Schema::dropIfExists('fundutilizeds');
    }
}
