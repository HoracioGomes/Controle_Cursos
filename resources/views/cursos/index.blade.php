@extends('layout')

@section('cabecalho')
Cursos
@endsection

@section('conteudo')  
<a href="{{route('rota_criar_curso')}}" class="btn btn-dark mb-2">Adicionar</a>
    @if (!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>    
    @endif

<ul class="list-group">    
    @foreach($cursos as $curso)
    <li class="list-group-item d-flex justify-content-between align-items-center">{{$curso->nome}}
        <form method="POST" action="/cursos/remover/{{$curso->id}}" 
            onsubmit="return confirm('Tem Certeza?')">
            @csrf
            <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button> 
         </form>
    </li>

    @endforeach
</ul>
@endsection
