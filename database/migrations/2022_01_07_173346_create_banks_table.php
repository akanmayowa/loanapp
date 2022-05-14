<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
   
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('bankname');
            $table->string('sortcode');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
