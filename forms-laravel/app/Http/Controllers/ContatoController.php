<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function showForm()
    {
        return view('contato');
    }

    public function submitForm(Request $request)
    {
        $data = $request->all();
        // Você pode adicionar lógica para salvar os dados ou enviar email aqui

        // Retornar os dados para a view junto com a mensagem de sucesso
        return view('contato')->with('data', $data)->with('success', 'Formulário enviado com sucesso!');
    }
}
