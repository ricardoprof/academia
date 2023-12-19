<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\AulasController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/alongamento', [ModalidadeController::class, 'alongamento'])->name('modalidade.alongamento');
Route::get('/modalidade/artes-marciais', [ModalidadeController::class, 'artesmarciais'])->name('modalidade.artes-marciais');
Route::get('/modalidade/cardio', [ModalidadeController::class, 'cardio'])->name('modalidade.cardio');
Route::get('/modalidade/crossfit', [ModalidadeController::class, 'crossfit'])->name('modalidade.crossfit');
Route::get('/modalidade/natacao', [ModalidadeController::class, 'natacao'])->name('modalidade.natacao');

Route::get('/aulas', [AulasController::class, 'index'])->name('aulas');
Route::get('/noticia', [NoticiaController::class, 'index'])->name('noticia');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');
