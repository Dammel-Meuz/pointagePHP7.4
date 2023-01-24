<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointeurs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('carte_id')->unique();
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable(); 
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
        Schema::dropIfExists('pointeurs');
    }
}
