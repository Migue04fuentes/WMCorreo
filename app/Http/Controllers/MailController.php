<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Mail\TestMail;  //Clase creada para administrar correo que se va a mandar
use Mail;
class MailController extends Controller
{
    public function getMail(){
        $data = ['name' => 'Miguel'];
        Mail::to('miguel03rf@gmail.com')->send(new TestMail($data));
    }
}
