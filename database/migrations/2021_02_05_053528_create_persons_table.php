<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('user_type');//tipo de usuario
            $table->string('names'); //nombres
            $table->string('identity_card')->unique(); //documento de identidad
            $table->string('document_number')->unique(); //número de documento
            $table->string('addres');//dirección
            $table->string('telephone_number')->unique();//número de teléfono
            $table->string('email')->unique();
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
        Schema::dropIfExists('persons');
    }
}
