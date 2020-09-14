<?php

namespace App\Http\Controllers;

use App\Dog;
use App\Mail\DogDetailsEmail;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller  {

    public function sendDogDetails (Dog $dog) {

        Mail::to (current_user () -> email)
            -> send (new DogDetailsEmail ($dog));

        return redirect () -> back ();

    }
}
