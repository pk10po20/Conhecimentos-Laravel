<x-layout title="Séries">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="h4">Lista de Séries</h2>
        <a href="{{ route('series.create') }}" class="btn btn-primary">+ Nova Série</a>
    </div>

    <ul class="list-group shadow-sm">
        @foreach ($series as $serie) 
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
            </li>
        @endforeach
    </ul>
</x-layout>
