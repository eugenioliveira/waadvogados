<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactForm;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Mostra o formulário de contato (envio de e-mails)
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.form');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SendContactForm $request)
    {
        try {
            Mail::to('geninoliveira@gmail.com')->send(new ContactFormMail($request));
            return response()->json(['message' => 'E-mail enviado com sucesso!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 423);
        }
    }
}
