@extends('layouts.app')

@section('content')
    <x-container>
        <h2>Contato</h2>
        
        <!-- Verificar se há uma mensagem de sucesso -->
        @if (isset($success))
            <div class="alert alert-success" role="alert">
                {{ $success }}
            </div>
        @endif

        <form action="/contato" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select class="form-control" id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <!-- Verificar se há dados submetidos -->
        @if (isset($data))
            <div class="mt-3">
                <h3>Dados submetidos:</h3>
                <p><strong>Nome:</strong> {{ $data['nome'] }}</p>
                <p><strong>Telefone:</strong> {{ $data['telefone'] }}</p>
                <p><strong>Endereço:</strong> {{ $data['endereco'] }}</p>
                <p><strong>Sexo:</strong> {{ $data['sexo'] }}</p>
            </div>
        @endif
    </x-container>
@endsection
