<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveUnused extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('art');
            $table->dropColumn('price');
        });
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn('art');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('art')->nullable();
            $table->unsignedDecimal('price')->nullable();
        });
        Schema::table('prices', function (Blueprint $table) {
            $table->string('art')->nullable();
        });
    }
}
