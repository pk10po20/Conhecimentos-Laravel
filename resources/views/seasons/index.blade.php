<x-layout title="Temporadas de '{!!$series->nome!!}'">
    <ul class="list-group shadow-sm">
        @foreach ($seasons as $season) 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    Temporada {{ $season->number }}

                    <span class="">
                        {{ $season->episodes->count() }}
                    </span>
                </li>
            @endforeach
        </ul>     
</x-layout>
