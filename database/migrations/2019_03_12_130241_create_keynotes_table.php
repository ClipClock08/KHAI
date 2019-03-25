<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeynotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keynotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Пока я сюда добавлю только текст. Но мне кажется можно было бы просто картинку
            $table->string('speaker', 200);
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
        Schema::dropIfExists('keynotes');
    }
}
