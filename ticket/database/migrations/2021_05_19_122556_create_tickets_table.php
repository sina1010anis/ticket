<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->foreignId('city_id_back')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id_next')->constrained()->cascadeOnDelete();
            $table->integer('way');
            $table->string('date_went');
            $table->string('date_return');
            $table->integer('ticket_type');
            $table->integer('transportation_type');
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
        Schema::dropIfExists('tickets');
    }
}
