@extends('layouts.app')

@section('content')
    <x-container>
        <h2 class="mb-4">Contato</h2>

        <!-- Verificar se há uma mensagem de sucesso -->
        @if (isset($success))
            <div class="alert alert-success" role="alert">
                {{ $success }}
            </div>
        @endif

        <form action="/contato" method="POST" class="mb-4">
            @csrf
            <div class="form-group mb-3">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group mb-3">
                <label for="telefone">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group mb-3">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>
            <div class="form-group mb-4">
                <label for="sexo">Sexo:</label>
                <select class="form-control" id="sexo" name="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>

        <!-- Verificar se há dados submetidos -->
        @if (isset($data))
            <div class="mt-4 p-4 border rounded">
                <h3>Dados Submetidos:</h3>
                <div class="mb-2">
                    <strong>Nome:</strong> {{ $data['nome'] }}
                </div>
                <div class="mb-2">
                    <strong>Telefone:</strong> {{ $data['telefone'] }}
                </div>
                <div class="mb-2">
                    <strong>Endereço:</strong> {{ $data['endereco'] }}
                </div>
                <div>
                    <strong>Sexo:</strong> {{ ucfirst($data['sexo']) }}
                </div>
            </div>
        @endif
    </x-container>
@endsection
