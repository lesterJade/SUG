<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonebooksTable extends Migration
{
    public function up()
    {
        Schema::create('phonebooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('phone');
            $table->string('department');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('phonebooks');
    }
}