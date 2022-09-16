<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleGastosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_gastos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gasto_id');
            $table->text('descripcion');
            $table->decimal('costo');
            $table->timestamps();
            $table->foreign('gasto_id')->references('id')->on('gastos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_gastos');
    }
}
