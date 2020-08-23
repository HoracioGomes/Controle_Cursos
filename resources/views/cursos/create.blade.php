@extends('layout')

@section('cabecalho')
    Adicionar Curso
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif    
<form method="post">
    @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text" class="form-control">
            </div>
            <button class="btn-primary">Adicionar</button>
        </form>
@endsection
