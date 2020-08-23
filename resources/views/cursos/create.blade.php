@extends('layout')

@section('cabecalho')
    Adicionar Curso
@endsection

@section('conteudo')    
<form method="post">
    @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text" class="form-control">
            </div>
            <button class="btn-primary">Adicionar</button>
        </form>
@endsection
