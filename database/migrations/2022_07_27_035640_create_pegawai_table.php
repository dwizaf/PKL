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
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('seksi_id')->constrained('seksi')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_pegawai');
            $table->string('email');
            $table->char('tlp_pegawai',13);
            $table->string('username');
            $table->string('password');
            $table->timestamps();
        });

        // Schema::table('pegawai', function (Blueprint $table) {
        //     $table->foreign('seksi_id')->references('id')->on('seksi')
        //             ->onUpdate('cascade')
        //             ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
};
