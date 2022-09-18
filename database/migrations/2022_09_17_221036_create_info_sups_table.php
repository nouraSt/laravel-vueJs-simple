<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_sups', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->date('dateNaissance');
            $table->foreignId('id_user')->nullable();
            $table->string('adresse');
            $table->string('ecole');
            $table->string('diplome');
            $table->date('date');
            $table->string('image');
            $table->string('cv_file');
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
        Schema::dropIfExists('info_sups');
    }
};
