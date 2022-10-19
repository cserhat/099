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
        Schema::dropIfExists('groupes');
        Schema::dropIfExists('equipes');

        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('groupe');
            $table->timestamps();
        });

        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string("pays");
            $table->string("drapeau");
            $table->unsignedBigInteger("groupe_id");
            $table->foreign("groupe_id")->references("id")->on("groupes")->onDelete("cascade");
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
        Schema::dropIfExists('equipes');
    }
};
