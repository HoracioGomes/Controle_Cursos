<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index(Request $request) {
//Captura Url acessada e mais
//echo $request->url();
//exit();

        $cursos = [
            'Kotlin',
            'React-Native',
            'Swift',
            'Arduino'
        ];
    
        $html = '<ul>';
    
        foreach ($cursos as $curso) {
            $html .= "<li>$curso</li>";
        }
    
        $html .= "</ul>";
    
        return $html;
    }






}



