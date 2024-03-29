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
        Schema::create('seksi', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('bidang_id')->unsigned();
            $table->foreignId('bidang_id')->constrained('bidang')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_seksi');
            $table->timestamps();
        });

    //     Schema::table('seksi', function (Blueprint $table) {
    //         $table->foreign('bidang_id')->references('id')->on('bidang')
    //         ->onDelete('cascade')->onUpdate('cascade');
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seksi');
    }
};
