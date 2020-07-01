<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiParsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_parsings', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('filename');
            $table->integer('on_item')->default(0);
            $table->integer('errors')->default(0);
            $table->integer('in_proccess')->default(0);
            $table->integer('finished')->default(0);
            $table->text('last_error')->nullable();
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
        Schema::dropIfExists('api_parsings');
    }
}
