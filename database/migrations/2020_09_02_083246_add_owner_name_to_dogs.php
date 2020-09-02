<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOwnerNameToDogs extends Migration  {

    public function up () {

        Schema::table('dogs', function (Blueprint $table) {

            $table -> string ('owner', 64) -> nullable ();

        });
    }

    public function down () {

        Schema::table('dogs', function (Blueprint $table) {

            $table -> dropColumn ('owner');

        });
    }
}
