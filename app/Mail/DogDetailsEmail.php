<?php

namespace App\Mail;

use App\Dog;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DogDetailsEmail extends Mailable  {

    use Queueable, SerializesModels;

    public $dog;

    public function __construct (Dog $dog) {

        $this -> dog = $dog;

    }

    public function build () {

        return $this -> view ('emails.dogs.details')
                     -> subject ('Your Dog Details Request');

    }
}
