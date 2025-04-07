<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;
use Illuminate\Support\Facades\DB;






class SeriesController extends Controller
{
    public function index(Request $request)
    {   
        $series =  Serie::query()->get();
        // O método all() é usado para obter todos os registros da tabela.
        // O método dd() "Dump and Die" é usado para depuração e exibe o conteúdo da variável e encerra a execução do script.
        
        return view('series.index')-> with('series', $series);
        // O método with() é usado para passar dados para a view.
        // O primeiro return que for executado é o que será retornado.
        // Caso use return de um array,
        // O Laravel irá converter automaticamente para JSON.
        // Não usar 'echo' dentro de um controller. Utilizar 'return' para retornar a resposta.
        // Para retornar url: return $request->url();
        // O helper response do Laravel fornece uma interface fluida para criar e personalizar diferentes tipos de respostas HTTP de maneira eficaz e padronizada.
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        // O método create() é usado para criar um novo registro no banco de dados.
        /*
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        */
        // O método save() é usado para salvar o registro no banco de dados.


        return to_route('series.index');
        // O método redirect() é usado para redirecionar o usuário para outra URL.
        // O método input() é usado para obter os dados enviados pelo formulário.
        // O método insert() é usado para inserir dados no banco de dados.
    }
}