<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWetransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wetransfer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('emailfrom')->nullable();
            $table->string('emailto')->nullable();
            $table->string('nomfichier')->nullable();
            $table->string('taillefichier')->nullable();
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
        Schema::dropIfExists('wetransfer');
    }
}
