<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoMail;
use App\Mail\ContatoNewMail;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function salvarNoBanco(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'subject' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        Contato::create([
            'nomeContato' => $request->input('name'),
            'emailContato' => $request->input('email'),
            'telefoneContato' => $request->input('tel'),
            'assuntoContato' => $request->input('subject'),
            'mensagemContato' => $request->input('mensagem'),
        ]);


        // Enviar e-mail
        Mail::to('vivabem@tipi01.smpsistema.com.br')->send(new ContatoMail($request->all()));


        return redirect()->route('contato')->with('success', 'Mensagem enviada com sucesso!');
    }

    public function salvarEmail(Request $request1)
    {
        $request1->validate([
            'emailnew' => 'required|email',
        ]);

        // Enviar e-mail
        Mail::to('vivabem@tipi01.smpsistema.com.br')->send(new ContatoNewMail($request1->all()));

        return redirect()->route('home')->with('success', 'Inscricao enviada com sucesso!');
    }
}
