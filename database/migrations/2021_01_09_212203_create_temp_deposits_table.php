<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('plan')->nullable();
            $table->string('gateway')->nullable();
            $table->string('acc_id')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('photo')->nullable();
            $table->string('status')->nullable();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_deposits');
    }
}
