<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ProdutosController
{
    public function index()
    {

        if(!empty($_POST['nome'])) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);  
            $produtos = App::get('database')->procurar('produtos','nome', $nome);
            $categorias = App::get('database')->selectAll('categorias');
            return view('site/produtos', compact('produtos', 'categorias'));   
        }

        if(!empty($_POST['categoriaID'])) {
            $categoria = filter_input(INPUT_POST, 'categoriaID', FILTER_SANITIZE_SPECIAL_CHARS);  
            $produtos = App::get('database')->procurar('produtos', 'categoriaID', $categoria);
            $categorias = App::get('database')->selectAll('categorias');
            return view('site/produtos', compact('produtos', 'categorias'));  
        }
        
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');
        return view('site/produtos', compact('produtos', 'categorias'));

    }

}

