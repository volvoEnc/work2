<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('art')->unique();

            $table->string('name')->nullable();
            $table->string('brand')->nullable();
            $table->string('package')->nullable();

            $table->string('manufacturer')->nullable();
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable();
            $table->string('country')->nullable();

            $table->string('category_name')->nullable();
            $table->foreignId('category_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
