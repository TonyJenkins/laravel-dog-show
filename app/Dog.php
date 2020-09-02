<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model  {

    public function image_url () {

        return "https://placedog.net/150/150/g?id=" . $this -> id;

    }
}
