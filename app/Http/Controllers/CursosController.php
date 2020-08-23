<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;


class CursosController extends Controller
{
    public function index(Request $request)
    {
        //Captura Url acessada e mais
        //echo $request->url();
        //exit();

        $cursos = Curso::query()->orderBy('nome')->get();
        $mensagem = request()->session()->get('mensagem');
        return view('cursos/index', compact('cursos', 'mensagem'));
    }

    public function create()
    {
        return view('cursos/create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('nome');
        $curso = new Curso();
        $curso->nome = $nome;
        $bandSalva = $curso->save();
        if ($bandSalva) {
            //echo ("{$curso->nome} com id: {$curso->id} foi salvo com sucesso!");
            $request->session()->flash('mensagem', "Curso {$curso->nome} com id {$curso->id} salvo com sucesso!");
        }
        return redirect("/cursos");
    }

    public function destroy(Request $request)
    {
        Curso::destroy($request->id);
        $request->session()->flash('mensagem', 'Excluído com sucesso!');
        return redirect('/cursos');
    }
}
