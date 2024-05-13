<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vet_id')->unsigned();
            $table->integer('examination_id')->unsigned();
            $table->timestamp('examination_date')->nullable();
            $table->timestamps();

            $table->foreign('vet_id')->references('vet_id')->on('vets')->onDelete('cascade');
            $table->foreign('examination_id')->references('examination_id')->on('cases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointements');
    }
};
