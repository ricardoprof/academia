<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContatoNewMail extends Mailable
{
    use Queueable, SerializesModels;

    public $dados;

    public function __construct($dados)
    {
        $this->dados = $dados;
    }

    public function build()
    {
        return $this->from('vivabem@tipi01.smpsistema.com.br')
                    ->subject('Contato via site')
                    ->view('site.emails.contatonew');
                    // Crie uma view para o e-mail em resources/views/emails/contatonew.blade.php
    }
}
