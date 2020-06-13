<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency');
            $table->decimal('rate', 14, 8);
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
