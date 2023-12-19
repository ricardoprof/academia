<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'tblcontatos';
    protected $fillable = ['nomeContato', 'telefoneContato', 'emailContato', 'assuntoContato', 'mensagemContato'];
}
