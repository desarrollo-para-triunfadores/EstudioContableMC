<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;
use Session;
use Redirect;
use Laracasts\Flash\Flash;

class MailController extends Controller
{



    public function store(Request $request)
    {
        Mail::send('front.emails.contact', $request->all(), function($msj){
            $msj->subject('Recibido desde Web www.EstudioMarciaCussatti.com');
            $msj->to('jpaulnava@gmail.com');
        });

        Flash::overlay('Bien! su mensaje se envio correctamente');

        return Redirect::to('/');
    }
}
