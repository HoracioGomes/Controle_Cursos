@extends('layout')

@section('cabecalho')
Cursos
@endsection

@section('conteudo')  
<a href="/cursos/criar" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    <?php foreach ($cursos as $curso) : ?>
    <li class="list-group-item"><?= $curso; ?></li>
    <?php endforeach; ?>
</ul>
@endsection
