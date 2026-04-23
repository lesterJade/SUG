<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareTable extends Migration
{
    public function up()
    {
        Schema::create('software', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('softdescription');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('software');
    }
}