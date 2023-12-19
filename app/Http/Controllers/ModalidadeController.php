<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('site.modalidade.musculacao');
    }

    public function alongamento(){
        return view('site.modalidade.alongamento');
    }

    public function artesmarciais()
    {
        return view('site.modalidade.artes-marciais');
    }

    public function cardio()
    {
        return view('site.modalidade.cardio');
    }

    public function crossfit()
    {
        return view('site.modalidade.crossfit');
    }

    public function natacao()
    {
        return view('site.modalidade.natacao');
    }
}
