<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('client',);
            $table->integer('status',);
            $table->string('date', 255);
            $table->integer('type',);
            $table->string('comment', 255);
            $table->integer('payed',);
            $table->integer('contract',);
            $table->integer('typec',);
            $table->string('adres', 255);
            $table->string('contractinfo', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
