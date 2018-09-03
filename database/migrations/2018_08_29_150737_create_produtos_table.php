<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod');
            $table->string('nome');
            $table->string('comp');
            $table->string('larg');
            $table->string('gram');
            $table->string('rend');
            $table->string('torcao');
            $table->string('enclarg')->nullable();
            $table->string('enccomp')->nullable();
            $table->string('infoficha')->nullable();
            $table->string('infointer')->nullable();
            $table->string('cf')->nullable();
            $table->string('ncm')->nullable();
            $table->string('lista');
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
        Schema::dropIfExists('produtos');
    }
}
