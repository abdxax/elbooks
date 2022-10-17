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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("chapterId");
            $table->unsignedBigInteger("tyepId");
            $table->integer("pageON");
            $table->string("filePath");
            $table->timestamps();

            $table->foreign("chapterId")->references("id")->on("chapters")->onDelete('cascade');

            $table->foreign("tyepId")->references("id")->on("type_contacts")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
