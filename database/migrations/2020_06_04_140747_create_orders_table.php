<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->foreignId('user_id')->nullable();
            $table->string('fio');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('comment')->nullable();
            $table->enum('type_payment', ['online', 'upon_receipt'])->default('online');;
            $table->decimal('price')->nullable();
            $table->enum('status', ['processing', 'work' ,'completed', 'canceled'])->default('processing');
            $table->timestamps();
            $table->time('time_of_delivery');
            $table->date('day_of_delivery');

            $table->foreign('user_id')->references('id')->on('users');
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
}
