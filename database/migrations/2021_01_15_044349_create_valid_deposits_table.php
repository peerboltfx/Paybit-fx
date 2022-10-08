<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValidDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valid_deposits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('referral')->nullable()->unique();
            $table->string('referred')->nullable();
            $table->string('status')->nullable();
            $table->string('amount')->nullable();
            $table->string('plan')->nullable();
            $table->string('gateway')->nullable();
            $table->string('value')->nullable();
            $table->string('growth')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('valid_deposits');
    }
}
