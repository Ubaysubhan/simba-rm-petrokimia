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
        Schema::create('barangkeluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
            $table->string('tanggal');
            $table->string('requester');
            $table->string('keperluan');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('jumlahbarang');
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
        Schema::dropIfExists('barangkeluars');
    }
};
