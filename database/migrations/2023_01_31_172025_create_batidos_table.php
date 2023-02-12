<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batidos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->decimal('precio',18,2);
            $table->unsignedBigInteger('id_fruta');
            $table->timestamps();

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
        Schema::dropIfExists('batidos');
    }
}
