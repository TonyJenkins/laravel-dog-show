<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model  {

    protected $fillable = [
        'name',
        'breed',
        'score',
        'owner',
        'notes',
    ];

    public function path ($append = "") {

        return "/dog/" . $this -> id . "/" . $append;
    }

    public function getPathAttribute () {

        return $this -> path ();

    }

    public function image_url ($size = 150) {

        return fake_image_url ($this -> id, $size);

    }

    public function formatted_notes () {

        return paragraphs_as_html ($this -> notes, 4);

    }
}
