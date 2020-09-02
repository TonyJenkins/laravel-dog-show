<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model  {

    public function path () {

        return "/dog/" . $this -> id . "/";
    }

    public function getPathAttribute () {

        return $this -> path ();

    }

    public function image_url ($size = 150) {

        return "https://placedog.net/{$size}/{$size}/g?id=" . $this -> id;

    }
}
