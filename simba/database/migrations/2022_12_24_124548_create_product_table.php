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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->string('tanggal');
            $table->string('requester');
            $table->string('foto');
            $table->string('deskripsi');
            $table->integer('barangawal');
            $table->integer('barangsekarang');
            $table->string('jumlahbarangmasuk');
            $table->string('jumlahbarangout');
            $table->string('jumlahbarangkeluar');

        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
