<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatidoFrutaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batido_fruta', function (Blueprint $table) {
            $table->id();
            $table->id_batido();
            $table->id_fruta();
            $table->timestamps();

            $table->foreign('id_batido')
                ->references('id')
                ->on('batidos');

            $table->foreign('id_fruta')
                ->references('id')
                ->on('frutas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batido_fruta');
    }
}
