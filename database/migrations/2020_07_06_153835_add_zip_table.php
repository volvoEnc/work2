<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;

class AddZipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zip_archives', function(Blueprint $table) {
            $table->id();
            $table->string('zip_path');
            $table->integer('items')->default(0);
            $table->timestamps();
        });
        Schema::table('api_parsings', function(Blueprint $table) {
            $table->integer('zip_archive_id')->nullable();
        });
        Storage::disk('local')->makeDirectory('apis/archives');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zip_archives');
        Schema::table('api_parsings', function(Blueprint $table) {
            $table->dropColumn('zip_archive_id');
        });
        Storage::disk('local')->deleteDirectory('apis/archives');
    }
}
