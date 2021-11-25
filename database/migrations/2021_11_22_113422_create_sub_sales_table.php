<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sales', function (Blueprint $table) {
            $table->id();
            $table->integer('Scid');
            $table->integer('said');
            $table->date('Sdate');
            $table->date('Sfrom');
            $table->date('Sto');
            $table->integer('Svalue');
            $table->integer('Sdiscount');
            $table->integer('Spaid');
            $table->integer('Srest');

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
        Schema::dropIfExists('sub_sales');
    }
}
