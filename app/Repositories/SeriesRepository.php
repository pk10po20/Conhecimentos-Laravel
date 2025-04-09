<?php 

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;

class SeriesRepository
{
    public function add(SeriesFormRequest $request)
    {
        {
            $serie = DB::Transaction(function () use ($request):Series {       
                $serie = Series::create($request->all());
                $seasons = [];
                for ($i = 1; $i <= $request->seasonsQty; $i++) {
                    $seasons[] = [
                        'serie_id' => $serie->id,
                        'number' => $i,
                    ];
                }
                Season::insert($seasons);
                $serie->load('seasons');
                
                // O método insert() é usado para inserir dados no banco de dados. (Insere todos os arrays de uma vez no banco de dados)     
                // O método create() é usado para criar um novo registro no banco de dados. (Insere os arrays um por um no banco de dados)
                
                $episodes = [];
                foreach ($serie->seasons as $season) {
                    for ($j = 1; $j <= $request->episodesPerPerson; $j++) {
                        $episodes[]= [
                            'season_id' => $season->id,
                            'number' => $j,
                        ];
                    }
                }
                Episode::insert($episodes);
                
        
                return $serie;
            });
        }
    }
}