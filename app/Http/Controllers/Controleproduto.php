<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class Controleproduto extends Controller
{
    public function index() {
        $produto = Produto::all();

        

        return view ('produto.index', [
            'produto' => $produto
        ]);
    }

    public function adicionar(){
        return view('produto.adicionar');
    }

    public function store(Request $request) {

        $nome = $request->nome;

        $produto = Produto::create([
            'nome' => $nome,
            'cod_barra' => $request->Cod_barra,
            'valor_venda' => $request->Valor_venda,
            'custo_medio' => $request->Custo_medio,
            'estoque_disponivel' => $request->Estoque,
            'estoque_max' => $request->Estoque_max,
            'estoque_min' => $request->Estoque_min,
            'origem_produto' => $request->Origem,
            'ncm' => $request->NCM,
            'cest' => $request->CEST,
            'unidade_medida' => $request->Unidade,
            'categoria' => $request->Categoria
    ]);

    echo "Produto com id{$produto->id} foi criado: {$produto->nome}";
        #$produto = new Produto();
        #$produto ->nome = $nome;
        #var_dump($produto->save());
    }
    
}