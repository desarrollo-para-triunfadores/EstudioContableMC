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
            $msj->subject('Recibido desde Web EstudioMarciaCussatti.com');
            $msj->to('m.cussatti@hotmail.com');
        });


        return Redirect::to('/');
        Flash::overlay('Bien! su mensaje se envio correctamente');
        Flash::success('Bien! su mensaje se envio correctamente');

    }
}
