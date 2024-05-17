<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/quem-somos', function () {
    return view('quem-somos');
});

Route::get('/contato', [ContatoController::class, 'showForm']);
Route::post('/contato', [ContatoController::class, 'submitForm']);
