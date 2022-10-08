<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('plan')->nullable();
            $table->string('gateway')->nullable();
            $table->string('wallet_addr')->nullable();
            $table->string('wallet_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('photo')->nullable();
            $table->string('currency')->nullable();
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
        Schema::dropIfExists('withdrawals');
    }
}
