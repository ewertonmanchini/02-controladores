<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function produtos()
    {
        echo "<h1>Lista Produtos: </h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "<li>Teclado</li>";
        echo "</ol>";
    }

    public function produtosView(){
        return view('produtos');
    }

    public function produtosViewParams(){ 
        /* Moldelo 1
        return view('produtos_params', [
            'produtos' => [
                ['id'=>1, 'name'=>'Computador'],
                ['id'=>2, 'name'=>'Monitor'],
                ['id'=>3, 'name'=>'Printer'],
                ['id'=>4, 'name'=>'Keyboard']
            ],
            'title'=> 'Relatorio - Todos Produtos'
        ]); */

        //Modelo 2
        $produtos = [
            ['id'=>1, 'name'=>'Computador   .'],
            ['id'=>2, 'name'=>'Monitor      .'],
            ['id'=>3, 'name'=>'Printer      .'],
            ['id'=>4, 'name'=>'Keyboard     .']
        ];
        $title = 'Relatorio - Todos Produtos';
        //dd(compact('produtos','title')); para debugar 
        return view('produtos_params', compact('produtos','title'));//cria uma array com as variaveis
    }
}
