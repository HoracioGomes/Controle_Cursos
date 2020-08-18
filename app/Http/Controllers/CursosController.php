<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CursosController extends Controller
{
    public function index(Request $request)
    {
        //Captura Url acessada e mais
        //echo $request->url();
        //exit();

        $cursos = [
            'Kotlin',
            'React-Native',
            'Swift',
            'Arduino'
        ];

        return view('cursos/index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos/create');
    }
}
