<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDogsTable extends Migration  {

    public function up () {

        Schema::create ('dogs', function (Blueprint $table) {
            $table -> id ();

            $table -> string ('name', 32);
            $table -> string ('breed', 32);
            $table -> decimal ('score', 3, 1);

            $table -> timestamps ();
        });
    }

    public function down () {

        Schema::dropIfExists('dogs');

    }
}
