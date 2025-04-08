<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Series;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request)
    {   
        $series =  Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        // O método all() é usado para obter todos os registros da tabela.
        // O método dd() "Dump and Die" é usado para depuração e exibe o conteúdo da variável e encerra a execução do script.
        
        return view('series.index')
            ->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
        // O método view() é usado para retornar uma view.
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

    public function store(SeriesFormRequest $request)
    {
        $serie = Series::create($request->all());
        for ($i = 1; $i < $request->SeasonsQty; $i++) {
            $season = $serie->seasons()->crate([
                'number' => $i,
            ]);

            for ($j = 1; $j < $request->episodesPerPerson; $j++) {
                $season->episodes()->crate([
                    'number' => $j,
                ]);

            }
            
            return to_route('series.index')
                ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso!");      
        }
        // O método flash() é usado para armazenar dados na sessão por um único pedido. Exemplo, ao atualizar a página a mensagem é removida.
        // O método create() é usado para criar um novo registro no banco de dados.
        /*
        $nomeSerie = $request->input('nome');
        $serie = new Series();
        $serie->nome = $nomeSerie;
        $serie->save();
        */
        // O método save() é usado para salvar o registro no banco de dados.

        return to_route('series.index');
        // O método redirect() é usado para redirecionar o usuário para outra URL.
        // O método input() é usado para obter os dados enviados pelo formulário.
        // O método insert() é usado para inserir dados no banco de dados.
        // Usar aspas duplas quando precisar adicionar variáveis dentro da string.
    } 

    public function destroy(Series $series)
    {
        // O método find() é usado para encontrar um registro pelo ID.
        $series->delete();
        
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso!");
    }

    public function edit(Series $series)
    {
        return view('series.edit')
            ->with('serie', $series);
        // O método edit() é usado para exibir o formulário de edição de uma série.        
    }

    public function update(Series $series, SeriesFormRequest $request) 
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso!");
    }
}
